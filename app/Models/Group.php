<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
class Group extends Model implements Auditable
{

    use HasFactory;
    use \OwenIt\Auditing\Auditable;
    protected $fillable=['name'];
    public function flags()
    {
        return $this->hasMany(Flag::class);
    }
}
