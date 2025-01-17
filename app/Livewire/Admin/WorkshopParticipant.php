<?php

namespace App\Livewire\Admin;

use App\Models\RegistrationWorkshop;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Workshop participant')]
#[Layout('components.layouts.admin')]
class WorkshopParticipant extends Component
{
    use WithPagination;
    private $breadcrumbs = [
        ['label' => 'Peserta Workshop', 'url' => '/sefest/workshop-participant'],
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
        return view('livewire.admin.workshop-participant', [
            "participants"=>RegistrationWorkshop::search($this->search)->paginate($this->perPage),
        ])->layoutData(['breadcrumbs' => $this->breadcrumbs]);
    }
}
