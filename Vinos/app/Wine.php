<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    protected $fillable=['name','reference','cost','slug'];

    public function specifications(){
        return $this->hasOne(Specification::class);
    }
}
