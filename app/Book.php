<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Book extends Model
{
    protected $table = 'books';

    public function author(){
        return $this->belongsTo('App\Author');
    }
}
