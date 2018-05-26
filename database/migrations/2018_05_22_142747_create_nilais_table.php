<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->string('no_induk_siswa');
            $table->foreign('no_induk_siswa')->references('no_induk')->on('users');
            $table->integer('id_mapel')->unsigned();
            $table->foreign('id_mapel')->references('id')->on('mata_pelajarans');
            $table->integer('id_semester')->unsigned();
            $table->foreign('id_semester')->references('id')->on('tahun_ajarans');
            $table->string('kode');
            $table->integer('1')->nullable();
            $table->integer('2')->nullable();
            $table->integer('3')->nullable();
            $table->integer('4')->nullable();
            $table->integer('5')->nullable();
            $table->integer('6')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilais');
    }
}
