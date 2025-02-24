<?php

namespace App\Livewire;

use App\Models\Group;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class ViewGroup extends Component
{
    #[Locked]
    public $id;

    public $groupName;
    public $groupCreate;
    public $groupUpdate;
    public $showForm=false;

    #[On('view-group-event')]

    public function ViewGroup ($id):void{
        $group = Group::findOrFail($id);
        $this->id=$id;
        $this->groupName=$group->name;
        $this->groupCreate=$group->created_at;
        $this->groupUpdate=$group->updated_at;
        $this->showForm=true;
    }
    public function render()
    {
        return view('livewire.view-group');
    }
}
