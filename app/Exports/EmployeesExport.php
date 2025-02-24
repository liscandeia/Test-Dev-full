<?php
namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeesExport implements FromCollection, WithHeadings
{
    public $search;

    public function __construct($search)
    {
        $this->search = $search;
    }

    public function collection()
    {
        $query = Employee::query();

        if ($this->search != '') {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        return $query->select(
                        'employees.name',
                        'employees.email',
                        'employees.cpf',
                        'units.fantasy_name as unit_name',
                        'flags.name as flag_name',
                        'groups.name as group_name'
                    )
                    ->join('units', 'employees.unit_id', '=', 'units.id')
                    ->join('flags', 'units.flag_id', '=', 'flags.id')
                    ->join('groups', 'flags.group_id', '=', 'groups.id')
                    ->get();
    }

    public function headings(): array
    {
        return [
            'Nome',
            'Email',
            'CPF',
            'Unidade',
            'Bandeira',
            'Grupo',
        ];
    }
}
