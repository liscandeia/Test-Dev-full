<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Employee extends Model implements Auditable
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['name','email','cpf','unit_id',];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function group()
    {
        return $this->hasOneThrough(Group::class, Flag::class,Unit::class,'id' ,'id', 'id', 'unit_id', 'flag_id','group_id');
    }
    public function flag()
    {
        return $this->hasOneThrough(Group::class, Flag::class, 'id', 'id', 'unit_id', 'flag_id');
    }
}
