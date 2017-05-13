<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->text('img');
            $table->text('short_conten');
            $table->text('content');
            $table->dateTime('created');
            $table->dateTime('modified');
            $table->text('author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
