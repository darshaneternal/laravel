<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';

    public function books(){
        //Returning multiple rows from books table 
        return $this->hasMany('App\Book');
    }

}
