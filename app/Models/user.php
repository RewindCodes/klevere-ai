<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;

    protected $guarded=[];


    public function histories(){
        return $this->hasMany(History::class);
    }
    public function orders(){
        return $this->hasMany(Orders::class);
    }
}
