<?php

namespace App\Livewire\Admin;

use App\Models\RegistrationWorkshop;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Competition participant detail')]
#[Layout('components.layouts.admin')]
class WorkshopParticipantDetail extends Component
{
    public RegistrationWorkshop $data;
    public function mount($id){
        $this->data = RegistrationWorkshop::find($id);
    }
    public function render()
    {
        return view('livewire.admin.workshop-participant-detail');
    }
}
