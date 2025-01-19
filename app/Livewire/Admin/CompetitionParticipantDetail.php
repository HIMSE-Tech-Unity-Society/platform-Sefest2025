<?php

namespace App\Livewire\Admin;

use App\Models\RegistrationCompetition;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Competition participant detail')]
#[Layout('components.layouts.admin')]
class CompetitionParticipantDetail extends Component
{
    public RegistrationCompetition $data;
    public function mount($id){
        $this->data = RegistrationCompetition::find($id);
    }
    public function render()
    {
        $member = json_decode($this->data->member);
        return view('livewire.admin.competition-participant-detail', ["members" => $member]);
    }
}
