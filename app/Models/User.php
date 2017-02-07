<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        return ($this -> isAdmin == 1);
    }

    public function adminUsers()
    {
        return $this->where('isAdmin','!=',0)->select(array('id'))->get();
    }

    public function newUserList()
    {
        return $this->where('isAdmin','=',0)->select(array('id'))->get();
    }
}
