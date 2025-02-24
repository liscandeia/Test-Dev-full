<?php

namespace App\Livewire;

use App\Models\Unit;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class ViewUnit extends Component
{    #[Locked]
    public $id;


    public $unitFlag;
    public $unitName;
    public $unitCreate;
    public $unitUpdate;
    public $unitGroup;
    public $unitCorporate;
    public $unitCNPJ;
    public $showForm=false;


    #[On('view-unit-event')]

    public function ViewUnit($id): void {
        $unit = Unit::with('group')->findOrFail($id);
        $this->id = $id;
        $this->unitName = $unit->fantasy_name;
        $this->unitCorporate= $unit->corporate_name;
        $this->unitCreate = $unit->created_at;
        $this->unitUpdate = $unit->updated_at;
        $this->unitGroup = $unit->flag->group->name;
        $this->unitFlag = $unit->flag->name;
        $this->unitCNPJ = $unit->cnpj;

        $this->showForm = true;
    }

    public function render()
    {
        return view('livewire.view-unit');
    }
}
