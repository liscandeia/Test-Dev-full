<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
class Flag extends Model implements Auditable
{
    /** @use HasFactory<\Database\Factories\FlagFactory> */
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['name', 'group_id'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
