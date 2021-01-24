<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserError extends Component
{
    public string $error = '';

    protected $listeners = ['error' => 'refresh', 'clearErrors' => 'clear'];

    public function clear()
    {
        $this->error = '';
    }

    public function refresh(string $error)
    {
        $this->error = $error;
    }

    public function render()
    {
        return view('livewire.user-error');
    }
}
