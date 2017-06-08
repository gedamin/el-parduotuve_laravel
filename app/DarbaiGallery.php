<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DarbaiGallery extends Model
{
    protected $table = 'darbai_gallery';
    protected $fillable = ['type', 'link', 'title', 'name', 'image'];
}