<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as Ryoichi;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use HasFactory, Ryoichi;
    protected $primaryKey = 'userId';
    protected $guarded = ['userId'];
    public $timestamps = false;

    public function foto()
    {
        return $this->hasMany(Foto::class, 'userId', 'userId');
    }
}
