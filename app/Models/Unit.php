<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
class Unit extends Model implements Auditable
{
    /** @use HasFactory<\Database\Factories\UnitFactory> */
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['fantasy_name', 'corporate_name', 'cnpj', 'flag_id'];

    public function flag()
    {
        return $this->belongsTo(Flag::class);
    }
    public function group()
    {
        return $this->hasOneThrough(Group::class, Flag::class, 'id', 'id', 'flag_id', 'group_id');
    }
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

}
