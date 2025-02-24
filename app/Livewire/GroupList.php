<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Group;
use Livewire\Attributes\On;

use function Laravel\Prompts\search;

class GroupList extends Component
{
    use WithPagination;
    public $search = '';

    #[On('refresh-edit-event-group')]
    #[On('create-group-event')]
    #[On('refresh-delete-event-group')]
    #[On('view-group-event')]

    public function render()
    {
        return view('livewire.group-list',['Groups'=>Group::where('name', 'like','%'.$this->search.'%')
        ->latest()
        ->paginate(10)]);
    }
}
