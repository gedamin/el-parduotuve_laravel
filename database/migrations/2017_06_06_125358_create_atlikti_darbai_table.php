<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtliktiDarbaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darbai_gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable();
            $table->string('link')->nullable();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('darbai_gallery');
    }
}
