<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seoPostComment extends Model
{
    protected $fillable = ['comment_author', 'email', 'seo_post_comment', 'seo_post_id'];

    //custom timestamps name
    const CREATED_AT = 'comment_created';
    const UPDATED_AT = 'comment_created';

    public function seopost() {
        return $this->belongsTo('App\Seopost',  'seo_post_id');
    }
}
