<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seoPostComment extends Model
{
    public $table = 'seo_post_comments';
    protected $fillable = ['comment_author', 'email', 'seo_post_comment', 'seo_post_id', 'is_active_comment'];

    //custom timestamps name
    const CREATED_AT = 'comment_created';
    const UPDATED_AT = 'comment_created';

    public function seopost() {
        return $this->belongsTo('App\Seopost',  'seo_post_id');
    }

}
