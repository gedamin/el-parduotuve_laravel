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
        'name', 'email', 'password', 'isAdmin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function index() {
        $user = auth()->user();
    }

    public function isAdmin() {
        return($this->isAdmin == 1);
    }

    public function LogoOnlyDisainerList() {
        return $this->hasMany('App\LogoDisainer',  'user_id'); // nurodziau lauko DB pavadinima 'disainer_id' kuriuo atliktas surisismas

    }

}

















