<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $guarded;

    public function user(){
        return $this->belongsTo('App\User','id');
    }

    public function bike(){
        return $this->hasMany('App\Bikes');
    }
}
