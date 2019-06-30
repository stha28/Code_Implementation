<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class renting extends Model
{
    protected $guarded;

    public function users(){
        return $this->belongsTo('App\Users','id');
    }

    public function bike(){
        return $this->hasMany('App\Bikes');
    }
}
