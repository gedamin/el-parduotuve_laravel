<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogoDisainerProfile extends Model
{
    //  +++ DB TABLE NAME: disainers_profiles +++
    public $table = 'disainers_profiles';

    protected $fillable = ['disainer_description', 'disainer_id', 'logo_img'];

    public function LogoDisainer() {
        return $this->belongsTo('App\LogoDisainer',  'disainer_id');
    }

    public function LogoDisainerImg() {
        return $this->hasMany('App\disainerslogo_image',  'profile_id');
    }






}
