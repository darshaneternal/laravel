<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisterUser extends Model
{		
		//die("sdsad");
		use SoftDeletes;
		
		public $table = "register_users";

        public $fillable = ['name','lastname','gender','vehicle'];

        protected $dates = ['deleted_at'];
}
