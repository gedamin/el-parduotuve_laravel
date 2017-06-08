<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDisainersList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disainers_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('disainer_name', 30);
            $table->string('disainer_title', 30);
            $table->text('disainerShort_description');
            $table->text('disainer_avatar');
            $table->string('disainer_phone');
            $table->string('disainer_email');
            $table->integer('is_active_disainer');
            $table->integer('disainer_sort')->default('9999999');
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
        Schema::dropIfExists('disainers_lists');
    }
}
