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
            $table->text('deskripsi');
            $table->string('email_by', 255);
            $table->string('crated_by', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('resep');
    }
}
