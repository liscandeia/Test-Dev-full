<?php


namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Employee;
use Livewire\Attributes\On;

class EmployeeList extends Component
{
    use WithPagination;

    public $search = '';

    #[On('create-employee-event')]
    #[On('refresh-delete-event')]
    #[On('refresh-edit-event')]
    #[On('view-employee-event')]
    public function render()
    {
        return view('livewire.employee-list',['Employees'=>Employee::where('name', 'like','%'.$this->search.'%')
        ->latest()
        ->paginate(10)]);
    }
}
