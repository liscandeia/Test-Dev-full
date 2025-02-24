<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Flag;
use Livewire\Attributes\On;

class FlagList extends Component
{
    use WithPagination;

    public $search = '';

    #[On('create-flag-event')]
    #[On('refresh-delete-event')]
    #[On('refresh-edit-event')]
    #[On('view-flag-event')]
    public function render()
    {
        return view('livewire.flag-list',['Flags'=>Flag::where('name', 'like','%'.$this->search.'%')
        ->latest()
        ->paginate(10)]);
    }
}
