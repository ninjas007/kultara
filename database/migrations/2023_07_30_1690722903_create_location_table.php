<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationTable extends Migration
{
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('masakan_id',);
            $table->string('nama_tempat', 255);
            $table->string('alamat_tempat', 255);
            $table->string('created_by', 255);
            $table->string('email_by', 255);
            $table->string('google_maps')->nullable();
            $table->json('shops');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('location');
    }
}