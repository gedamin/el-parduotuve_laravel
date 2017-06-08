<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    protected $table = 'image_gallery';
    protected $fillable = ['type', 'title','image', 'profile_id', 'disainer_id'];

    public function LogoGalleryLogo() {
        return $this->hasMany('App\LogoDisainer',  'profile_id');
    }
}