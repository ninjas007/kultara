<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasakanTable extends Migration
{
    public function up()
    {
        Schema::create('masakan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url_gambar')->nullable();
            $table->string('nama', 255);
            $table->text('keterangan_masakan');
            $table->integer('jenis');
        });
    }

    public function down()
    {
        Schema::dropIfExists('masakan');
    }
}