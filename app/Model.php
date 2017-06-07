<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    // this is what is allowed pretty much, but whitelisted
//    protected $fillable = ['title', 'body'];

//blacklist for submitted data
    protected $guarded = [];
}
