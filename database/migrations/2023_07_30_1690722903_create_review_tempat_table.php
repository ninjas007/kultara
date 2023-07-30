<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTempatTable extends Migration
{
    public function up()
    {
        Schema::create('review_tempat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('masakan_id',);
            $table->string('alamat', 255);
            $table->string('nama_reviewer', 255);
            $table->string('email_reviewer', 255);
            $table->integer('rating');
            $table->text('comment');
            $table->string('no_wa');
        });
    }

    public function down()
    {
        Schema::dropIfExists('review_tempat');
    }
}