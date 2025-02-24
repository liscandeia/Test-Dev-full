<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class ViewEmployee extends Component
{
    #[Locked]
    public $id;

    public $employeeFlag;
    public $employeeName;
    public $employeeCreate;
    public $employeeUpdate;
    public $employeeGroup;
    public $employeeEmail;
    public $employeeCPF;
    public $employeeUnit;
    public $showForm = false;

    #[On('view-employee-event')]
    public function viewEmployee($id): void
    {
        $employee = Employee::with('unit.flag.group')->findOrFail($id);
        $this->id = $id;
        $this->employeeName = $employee->name;
        $this->employeeEmail = $employee->email;
        $this->employeeCreate = $employee->created_at;
        $this->employeeUpdate = $employee->updated_at;
        $this->employeeGroup = $employee->unit->flag->group->name;
        $this->employeeFlag = $employee->unit->flag->name;
        $this->employeeUnit = $employee->unit->fantasy_name;
        $this->employeeCPF = $employee->cpf;

        $this->showForm = true;
    }

    public function render()
    {
        return view('livewire.view-employee');
    }
}
