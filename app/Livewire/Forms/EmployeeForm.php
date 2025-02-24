<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Employee;

class EmployeeForm extends Form
{
    public ? Employee $employee;

    public $unit_id='';
    public $name='';
    public $email='';
    public $cpf='';
    protected $rules=['unit_id'=>'required','name'=>'required', 'email'=>'required','cpf'=>'required'];

    public function CreateEmployee():Employee{
        $this->validate();
        $employee = Employee::create($this->all());
        $this->reset('unit_id','name','email','cpf');
        return $employee;

    }
    public function SetEmployee(Employee $employee):void{
        $this->employee=$employee;
        $this->name=$employee->name;
        $this->email=$employee->email;
        $this->cpf=$employee->cpf;
        $this->unit_id=$employee->unit_id;
    }

    public function UpdateEmployee():bool{
        $this->validate();
        return $this->employee->update($this->all());
    }

}
