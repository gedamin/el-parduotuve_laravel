<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogoDisainer extends Model
{
    //  +++ DB TABLE NAME: disainers_lists +++
    public $table = 'disainers_lists';

    protected $fillable = ['disainer_name', 'disainer_title', 'disainerShort_description','disainer_avatar', 'disainer_phone', 'disainer_email', 'disainer_phone', 'disainer_created', 'is_active_disainer', 'disainer_sort' , 'user_id', 'slug'];

    public function LogoDisainerList() {
        return $this->hasOne('App\LogoDisainerProfile',  'disainer_id'); // nurodziau lauko DB pavadinima 'disainer_id' kuriuo atliktas surisismas

    }

    public function LogoDisainerGallery() {
        return $this->hasMany('App\ImageGallery',  'profile_id');
    }


}
