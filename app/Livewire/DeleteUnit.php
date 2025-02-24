<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Unit;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
class DeleteUnit extends Component
{
    #[Locked]
    public $id;

    public $unitName;
    public $showForm=false;

    #[On('delete-unit-event')]

    public function GetUnit ($id):void{
        $unit = Unit::findOrFail($id);
        $this->id=$id;
        $this->unitName=$unit->fantasy_name;
        $this->showForm=true;
    }
    public function DeleteUnit(): void{
     $unit= Unit::findOrFail($this->id);
     $unit->delete();
     $this->showForm=false;
     $this->dispatch('refresh-delete-event')->to(UnitList::class);
    }

    public function render()
    {
        return view('livewire.delete-unit');
    }
}
