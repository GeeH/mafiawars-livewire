<?php declare(strict_types=1);

namespace App\Http\Livewire;

use App\Level;
use Illuminate\View\View;
use Livewire\Component;

class Character extends Component
{
    /** @var \App\Character */
    public $character;

    protected $listeners = ['characterUpdated' => 'refresh'];

    public function mount(): void
    {
        $this->character = \App\Character::findOrFail(1);
    }

    public function refresh(): void
    {
        $this->character->refresh();
        $this->checkForLevelUp();
    }

    public function render(): View
    {
        return view('livewire.character');
    }

    public function checkForLevelUp()
    {
        $playersNextLevelXp = Level::find($this->character->level + 1);

        if($playersNextLevelXp && $this->character->xp >= $playersNextLevelXp->xp_needed) {
            $newLevel = Level::where('xp_needed', '<', $this->character->xp)
                ->orderBy('xp_needed', 'desc')
                ->value('id');

            $this->character->level = $newLevel;
            $this->character->energy += 100;
            $this->character->save();
        }

        // look at characters xp
        // compare it to the xp of the level they are stated to be
        // if their xp is more than the xp of the level they are stated to be they leveled up
            // update their level to be the new level
            // reward them with 100 energy
            // tell them about it in the front end (event?)
    }
}
