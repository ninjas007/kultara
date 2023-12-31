<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepTable extends Migration
{
    public function up()
    {
        Schema::create('resep', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_masakan', 255);
            $table->integer('masakan_id',);
            $table->longText('deskripsi');
            $table->json('alat_dan_bahan');
            $table->json('cara_memasak');
            $table->string('email_by', 255);
            $table->string('created_by', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resep');
    }
}
