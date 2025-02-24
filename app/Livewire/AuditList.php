<?php

namespace App\Livewire;

use Livewire\Component;

use Livewire\WithPagination;
use OwenIt\Auditing\Models\Audit;

class AuditList extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.audit-list', [
            'audits' => Audit::latest()->paginate(10)
        ]);
    }
}
