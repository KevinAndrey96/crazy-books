<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->string('front_page');
            $table->string('name');
            $table->string('circle_audio');
            $table->string('triangle_text');
            $table->string('triangle_audio');
            $table->string('start_media_1');
            $table->string('start_media_2');
            $table->string('square_media_1');
            $table->string('square_media_2');
            $table->string('rectangle_text');
            $table->string('rectangle_audio');
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
        Schema::dropIfExists('books');
    }
}
