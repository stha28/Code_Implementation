<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bikes extends Model
{
    protected $guarded;
    
    public function categories(){
        return $this->belongsTo('App\categories','id');
    }
   
    public function users(){
        return $this->belongsTo('App\Users','id');
    }
    
    public function renting(){
        return $this->belongsTo('App\renting','id');
    }
}
