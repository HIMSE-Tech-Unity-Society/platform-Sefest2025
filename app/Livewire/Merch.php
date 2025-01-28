<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.base')]
#[Title('Merch Sefest 2025')]
class Merch extends Component
{
    public function render()
    {
        return view('livewire.merch');
    }
}
