<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\RedirectResponse;
use App\Livewire\Forms\FlagForm;
use App\Models\Group;
use Illuminate\Support\Collection;

class CreateFlag extends Component
{
    public FlagForm $form;
    public Collection $groups;
    public $showForm = false;

    protected $rules = [
        'form.name' => 'required|string|max:255',
        'form.group_id' => 'required|exists:groups,id',
    ];

    public function SaveFlag(): RedirectResponse
    {
        $this->validate();

        $this->form->CreateFlag();
        $this->dispatch('create-flag-event')->to(FlagList::class);
        $this->showForm = false;
        return back()->with('success', 'Produto Salvo');
    }

    public function render()
    {
        return view('livewire.create-flag');
    }

    public function mount()
    {
        
        $this->groups = Group::all();
    }
}
