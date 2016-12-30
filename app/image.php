<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    //use SoftDeletes;
		
		public $table = "image";

        public $fillable = ['image'];

}
