<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooks2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_2', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->string('front_page');
            $table->string('circle_audio');
            $table->string('pencil_audio');
            $table->string('planet_image');
            $table->string('face_video');
            $table->string('eye_image');
            $table->string('tv_video');
            $table->string('message_image');
            $table->text('message_text');
            $table->string('diamond_image');
            $table->text('diamond_text');
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
        Schema::dropIfExists('books_2');
    }
}
