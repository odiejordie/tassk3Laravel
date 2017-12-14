<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
    	'name', 'email', 'password'
    ];

    public function coment(){
    	return $this->hasMany('App\Comment', 'users_id');
    }
}
