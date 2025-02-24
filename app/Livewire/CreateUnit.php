<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\RedirectResponse;
use App\Livewire\Forms\UnitForm;
use App\Models\Flag;
use App\Models\Unit;
use Illuminate\Support\Collection;

class CreateUnit extends Component
{
    public UnitForm $form;
    public Collection $flags;
    public $showForm = false;

    protected $rules = [
        'form.fantasy_name' => 'required|string|max:255',
        'form.corporate_name' => 'required|string|max:255',
        'form.cnpj' => 'required|size:14|regex:/^\d{14}$/|unique:units,cnpj',
        'form.flag_id' => 'required|exists:flags,id',
    ];

    public function saveUnit(): RedirectResponse
    {
        $this->validate();

        // Remove todos os caracteres não numéricos do CNPJ
        $this->form->cnpj = preg_replace('/\D/', '', $this->form->cnpj);

        Unit::create($this->form->toArray());

        $this->reset('form');
        $this->showForm = false;
        $this->dispatch('create-unit-event')->to(UnitList::class);
        return back()->with('success', 'Unidade criada com sucesso.');
    }

    public function render()
    {
        return view('livewire.create-unit');
    }

    public function mount()
    {
        $this->flags = Flag::all();
    }
}
