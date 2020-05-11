<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
protected $fillable=['wine_id','region','brand','color','age','sugar','alevel','img'];

public function wines(){

    return $this->belongsTo(Wine::class);

}
}
