<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\RedirectResponse;
use App\Livewire\Forms\EmployeeForm;
use App\Models\Unit;
use App\Models\Employee;
use Illuminate\Support\Collection;

class CreateEmployee extends Component
{
    public EmployeeForm $form;
    public Collection $units;
    public $showForm = false;

    protected $rules = [
        'form.name' => 'required|string|max:255',
        'form.email' => 'required|email',
        'form.cpf' => 'required|size:11|regex:/^\d{11}$/|unique:employees,cpf',
        'form.unit_id' => 'required|exists:units,id',
    ];

    public function saveEmployee(): RedirectResponse
    {
        $this->validate();
        $this->form->cpf = preg_replace('/\D/', '', $this->form->cpf);

       Employee::create($this->form->toArray());

        $this->reset('form');
        $this->showForm = false;
        $this->dispatch('create-employee-event')->to(EmployeeList::class);
        return back()->with('success', 'Unidade criada com sucesso.');
    }

    public function render()
    {
        return view('livewire.create-employee');
    }

    public function mount()
    {

        $this->units = Unit::all();
    }
}
