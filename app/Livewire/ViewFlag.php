<?php

namespace App\Livewire;

use App\Models\Flag;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class ViewFlag extends Component
{    #[Locked]
    public $id;

    public $flagName;
    public $flagCreate;
    public $flagUpdate;
    public $flagGroup;
    public $showForm=false;

    #[On('view-flag-event')]

    public function ViewFlag($id): void {
        $flag = Flag::with('group')->findOrFail($id);
        $this->id = $id;
        $this->flagName = $flag->name;
        $this->flagCreate = $flag->created_at;
        $this->flagUpdate = $flag->updated_at;
        $this->flagGroup = $flag->group->name;
        $this->showForm = true;
    }

    public function render()
    {
        return view('livewire.view-flag');
    }
}
