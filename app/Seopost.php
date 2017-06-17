<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seopost extends Model
{
    public $table = 'seo_posts';
    protected $fillable = ['title', 'img', 'content','short_conten', 'author', 'meta_title', 'meta_description', 'twiter_creator', 'slug'];

    //custom timestamps name
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function comments() {
        return $this->hasMany('App\seoPostComment',  'seo_post_id'); // nurodziau lauko DB pavadinima 'seo_post_id' kuriuo atliktas surisismas

    }
}