<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    protected $table='users';
	
    public function roles(){
        return $this->belongsToMany('App\Role', 'user_role');
    }
}
