<?php

namespace App\Livewire\Admin;

use App\Models\RegistrationCompetition;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Competition participant')]
#[Layout('components.layouts.admin')]
class CompetitionParticipant extends Component
{
    use WithPagination;
    private $breadcrumbs = [
        ['label' => 'Peserta Lomba', 'url' => '/sefest/competition-participant'],
    ];
    public $perPage = 10;
    public $search = '';
    public function updatedPerPage(){
        $this->resetPage();
    }
    public function paginationView()
    {
        return 'components.pagination-admin';
    }
    public function render()
    {
        return view('livewire.admin.competition-participant', [
            "participants"=>RegistrationCompetition::search($this->search)->paginate($this->perPage),
        ])->layoutData(['breadcrumbs' => $this->breadcrumbs]);
    }
}
