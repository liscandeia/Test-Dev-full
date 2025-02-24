<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Flag;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
class DeleteFlag extends Component
{
    #[Locked]
    public $id;

    public $flagName;
    public $showForm=false;

    #[On('delete-flag-event')]

    public function GetFlag ($id):void{
        $flag = Flag::findOrFail($id);
        $this->id=$id;
        $this->flagName=$flag->name;
        $this->showForm=true;
    }
    public function DeleteFlag(): void{
     $flag= Flag::findOrFail($this->id);
     $flag->delete();
     $this->showForm=false;
     $this->dispatch('refresh-delete-event')->to(FlagList::class);
    }

    public function render()
    {
        return view('livewire.delete-flag');
    }
}
