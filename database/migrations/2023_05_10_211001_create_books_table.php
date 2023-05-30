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
            $table->text('front_page');
            $table->text('name');
            $table->text('circle_audio');
            $table->text('triangle_text');
            $table->text('triangle_audio');
            $table->text('start_media_1');
            $table->text('start_media_2');
            $table->text('square_media_1');
            $table->text('square_media_2');
            $table->text('rectangle_text');
            $table->text('rectangle_audio');
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
