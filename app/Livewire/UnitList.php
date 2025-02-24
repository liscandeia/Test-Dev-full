<?php


namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Unit;
use Livewire\Attributes\On;

class UnitList extends Component
{
    use WithPagination;

    public $search = '';

    #[On('create-unit-event')]
    #[On('refresh-delete-event')]
    #[On('refresh-edit-event')]
    #[On('view-unit-event')]
    public function render()
    {
        return view('livewire.unit-list',['Units'=>Unit::where('fantasy_name', 'like','%'.$this->search.'%')
        ->latest()
        ->paginate(10)]);
    }
}
