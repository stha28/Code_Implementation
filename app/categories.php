<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $guarded;
    
    public function bikes(){
        return $this->hasMany('App\Bikes');
    }
}
