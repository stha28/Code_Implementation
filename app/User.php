<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',  'email', 'password', 'usertype'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function is_admin()
    {
        if($this->UserType=='Admin')
        {
            return true;
        }
        return false;
    }   
    
    public function is_active()
    {
        if($this->Status=='Active')
        {
            return true;
        }
        return false;
    }   

    protected $guarded;

    public function bikes(){
        return $this->hasMany('App\Bikes');
    }

    public function renting(){
        return $this->hasMany('App\renting');
    }

    public function products(){
        return $this->hasMany('App\products');
    }

    public function booking(){
        return $this->hasMany('App\Booking');
    }

}


