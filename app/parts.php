<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parts extends Model
{
    protected $guarded;

    public function users(){
        return $this->belongsTo('App\Users','id');
    }

    public function booking(){
        return $this->belongsTo('App\Booking','id');
    }
    
    public function renting(){
        return $this->belongsTo('App\renting','id');
    }
}
