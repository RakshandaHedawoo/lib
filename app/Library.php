<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $table="books";
    protected $fillable=['title','author','price'];
}
