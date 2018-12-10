<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password','role_id','photo_id','is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role() {
        return $this->belongsTo('App\Role');
    }

    public function photo() {
        return $this->belongsTo('App\Photo');
    }

    public function isAdmin() {
// $this is_active == 1 sam dodao da bi pojacao sigurnost jer i ako je administrator ako nije aktivan nece moci da pristupi stranicama.
        if($this->role->name == 'administrator' && $this->is_active == 1) {
            return true;
        }
            return false;
    }

    public function posts() {

        return $this->hasMany('App\Post');
    }
} 
