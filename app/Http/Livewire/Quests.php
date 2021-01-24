<?php

namespace App\Http\Livewire;

use App\Quest;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Quests extends Component
{
    /** @var \App\Character */
    public $character;
    /** @var Collection|Quest[] */
    public $quests;

    public string $error = '';

    public function mount()
    {
        $this->character = \App\Character::findOrFail(1);
        $this->quests = Quest::where('level', '<=', $this->character->level)->get();
    }

    public function render()
    {
        return view('livewire.quests');
    }

    public function doQuest(int $questId)
    {
        $this->emit('clearErrors');

        /** @var Quest $quest */
        $quest = $this->quests
            ->firstWhere('id', '=', $questId);

        // 1337 hack0r checks
        if ($this->character->energy < $quest->energy_cost) {
            $this->emit('error', 'You don\'t have enough energy, you need ' . $quest->energy_cost);
            return;
        }

        // manipulate the character's stats
        $this->character->energy -= $quest->energy_cost;
        $this->character->xp += $quest->reward_xp;
        $this->character->money += $quest->reward_money;
        $this->character->save();

        // emit an event so the character component gets update
        $this->emit('characterUpdated');
    }
}
