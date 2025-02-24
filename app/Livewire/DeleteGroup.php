<?php

namespace App\Livewire;

use App\Models\Group;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class DeleteGroup extends Component
{   #[Locked]
    public $id;

    public $groupName;
    public $showForm=false;

    #[On('delete-group-event')]

    public function GetGroup ($id):void{
        $group = Group::findOrFail($id);
        $this->id=$id;
        $this->groupName=$group->name;
        $this->showForm=true;
    }
    public function DeleteGroup(): void{
     $group= Group::findOrFail($this->id);
     $group->delete();
     $this->showForm=false;
     $this->dispatch('refresh-delete-event-group')->to(GroupList::class);
    }
    public function render()
    {
        return view('livewire.delete-group');
    }
}
