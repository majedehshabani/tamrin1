<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name', 'email','tel','gens','nz1','nz2','subject','message'
    ];
}
//