<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeesExport;


class EmployeeReportList extends Component
{
    use WithPagination;

    public $search = '';
    public function exportExcel()
    {
        return Excel::download(new EmployeesExport($this->search), 'colaboradores.xlsx');
    }
    public function render()
    {
        return view('livewire.employee-report-list',['Employees'=>Employee::where('name', 'like','%'.$this->search.'%')
        ->latest()
        ->paginate(10)]);
    }
}
