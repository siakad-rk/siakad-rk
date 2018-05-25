<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenghuniKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menghuni_kelas', function (Blueprint $table) {
            $table->string('no_induk');
            $table->foreign('no_induk')->references('no_induk')->on('users');
            $table->string('nama_kelas');
            $table->foreign('nama_kelas')->references('nama_kelas')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menghuni_kelas');
    }
}
