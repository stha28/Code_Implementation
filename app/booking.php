<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    public function is_book()
    {
        if($this->Status=='Booked')
        {
            return true;
        }
        return false;
    }

    public function is_bought()
    {
        if($this->Status=='Bought')
        {
            return true;
        }
        return false;
    }

    public function user(){
        return $this->belongsTo('App\User','id');
    }

    public function bike(){
        return $this->hasMany('App\Bikes');
    }
}
