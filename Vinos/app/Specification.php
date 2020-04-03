<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
protected $fillable=['wine_id','slug','region','brand','color','age','sugar','alevel'];
}
