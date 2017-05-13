<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seopost extends Model
{
    public $table = 'seo_posts';
    protected $fillable = ['title', 'img', 'content','short_conten', 'author' ];

    //custom timestamps name
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}