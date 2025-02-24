<?php

namespace App\Livewire;

use App\Livewire\Forms\GroupForm;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class CreateGroup extends Component
{
    public GroupForm $form;

    public $showForm = false;

    protected $rules = [
        'form.name' => 'required|string|max:255',
    ];

    public function SaveGroup(): RedirectResponse
    {
        $this->validate();

        $this->form->CreateGroup();
        $this->dispatch('create-group-event')->to(GroupList::class);
        $this->showForm = false;

        return back()->with('success', 'Produto Salvo');
    }

    public function render()
    {
        return view('livewire.create-group');
    }
}
