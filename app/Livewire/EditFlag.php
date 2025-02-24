<?php

namespace App\Livewire;

use App\Livewire\Forms\FlagForm;
use Livewire\Component;
use App\Models\Flag;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Log;
use App\Models\Group;
use Illuminate\Support\Collection;

class EditFlag extends Component
{
    public FlagForm $form;
    public Collection $groups;
    public $showForm = false;

    protected $rules = [
        'form.name' => 'required|string|max:255',
        'form.group_id' => 'required|exists:groups,id',
    ];

    #[On('edit-flag-event')]
    public function GetFlags(Flag $id): void
    {
        Log::info('GetFlags called with ID: ' . $id->id);
        $this->showForm = true;
        $this->form->SetFlag($id);
    }

    public function UpdateFlagAndSave(): void
    {
        Log::info('UpdateFlagAndSave called');
        $this->validate();

        $this->form->UpdateFlag();
        $this->showForm = false;
        $this->dispatch('refresh-edit-event')->to(FlagList::class);
    }

    public function render()
    {
        return view('livewire.edit-flag');
    }

    public function mount()
    {
        // Carregar os grupos econômicos quando o componente for montado
        $this->groups = Group::all();
    }
}
