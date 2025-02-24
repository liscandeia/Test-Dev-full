<?php

namespace App\Livewire;

use App\Livewire\Forms\UnitForm;
use Livewire\Component;
use App\Models\Unit;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Log;
use App\Models\Flag;
use Illuminate\Support\Collection;

class EditUnit extends Component
{
    public UnitForm $form;
    public Collection $flags;
    public $showForm = false;
    public $unitId;

    protected function rules()
    {
        return [
            'form.fantasy_name'   => 'required|string|max:255',
            'form.corporate_name' => 'required|string|max:255',
            'form.cnpj'           => 'required|size:14|regex:/^\d{14}$/|unique:units,cnpj,' . $this->unitId,
            'form.flag_id'        => 'required|exists:flags,id',
        ];
    }

    #[On('edit-unit-event')]
    public function GetUnit(Unit $id): void
    {
        Log::info('GetUnit called with ID: ' . $id->id);
        $this->showForm = true;
        $this->unitId = $id->id;
        $this->form->SetUnit($id);
    }

    public function UpdateUnitAndSave(): void
    {
        Log::info('UpdateUnitAndSave called');
        $this->validate();

        $unit = Unit::findOrFail($this->unitId);
        $unit->update($this->form->toArray());

        $this->showForm = false;
        $this->dispatch('refresh-edit-event')->to(UnitList::class);
    }

    public function render()
    {
        return view('livewire.edit-unit');
    }

    public function mount()
    {
        // Carregar as bandeiras quando o componente for montado
        $this->flags = Flag::all();
    }
}
