<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_post_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment_author', 100);
            $table->string('email');
            $table->text('seo_post_comment');
            $table->dateTime('comment_created');
            $table->integer('is_active_comment');
            $table->integer('seo_post_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::dropIfExists('seo_post_comments');
    }
}
