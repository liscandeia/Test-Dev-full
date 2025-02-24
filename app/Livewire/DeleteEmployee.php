<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
class DeleteEmployee extends Component
{
    #[Locked]
    public $id;

    public $employeeName;
    public $showForm=false;

    #[On('delete-employee-event')]

    public function GetEmployee ($id):void{
        $employee = Employee::findOrFail($id);
        $this->id=$id;
        $this->employeeName=$employee->name;
        $this->showForm=true;
    }
    public function DeleteEmployee(): void{
     $employee= Employee::findOrFail($this->id);
     $employee->delete();
     $this->showForm=false;
     $this->dispatch('refresh-delete-event')->to(EmployeeList::class);
    }

    public function render()
    {
        return view('livewire.delete-employee');
    }
}
