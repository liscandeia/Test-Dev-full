<?php
namespace App\Livewire;

use App\Livewire\Forms\GroupForm;
use Livewire\Component;
use App\Models\Group;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Log;

class EditGroup extends Component
{
    public GroupForm $form;
    public $showForm = false;

    protected $rules = [
        'form.name' => 'required|string|max:255',
    ];

    #[On('edit-group-event')]
    public function GetGroups(Group $id): void
    {
        Log::info('GetGroups called with ID: ' . $id->id);
        $this->showForm = true;
        $this->form->SetGroup($id);
    }

    public function UpdateGroupAndSave(): void
    {
        Log::info('UpdateGroupAndSave called');
        $this->validate();

        $this->form->UpdateGroup();
        $this->showForm = false;
        $this->dispatch('refresh-edit-event-group')->to(GroupList::class);
    }

    public function render()
    {
        return view('livewire.edit-group');
    }
}
