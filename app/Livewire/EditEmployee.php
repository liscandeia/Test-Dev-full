<?php

namespace App\Livewire;

use App\Livewire\Forms\EmployeeForm;
use Livewire\Component;
use App\Models\Employee;
use Livewire\Attributes\On;
use App\Models\Unit;
use Illuminate\Support\Collection;

class EditEmployee extends Component
{
    public EmployeeForm $form;
    public Collection $units;
    public $showForm = false;
    public $employeeId;

    protected function rules()
    {
        return [
            'form.name' => 'required|string|max:255',
            'form.email' => 'required|email',
            'form.cpf' => 'required|size:11|regex:/^\d{11}$/|unique:employees,cpf,' . $this->employeeId,
            'form.unit_id' => 'required|exists:units,id',
        ];
    }

    #[On('edit-employee-event')]
    public function GetEmployee(Employee $id): void
    {
        $this->showForm = true;
        $this->employeeId = $id->id;
        $this->form->SetEmployee($id);
    }

    public function UpdateEmployeeAndSave(): void
    {
        $this->validate();
        $this->form->cpf = preg_replace('/\D/', '', $this->form->cpf);

        $employee = Employee::findOrFail($this->employeeId);
        $employee->update($this->form->toArray());

        $this->showForm = false;
        $this->dispatch('refresh-edit-event')->to(EmployeeList::class);
    }

    public function render()
    {
        return view('livewire.edit-employee');
    }

    public function mount()
    {
        $this->units = Unit::all();
    }
}
