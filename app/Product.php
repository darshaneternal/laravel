<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{		
		//die("sdsad");
		use SoftDeletes;
		
		public $table = "products";

        public $fillable = ['name','details'];

        protected $dates = ['deleted_at'];
}
