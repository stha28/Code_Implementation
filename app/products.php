<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $guarded;
    
    public function users(){
        return $this->belongsTo('App\Users','id');
    }

    public function booking(){
        return $this->belongsTo('App\Booking','id');
    }
    
    public function paymemt(){
        return $this->belongsTo('App\Payment','id');
    }
   
}
