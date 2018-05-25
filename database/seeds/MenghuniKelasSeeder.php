<?php

use Illuminate\Database\Seeder;
use App\MenghuniKelas;
class MenghuniKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new MenghuniKelas();
        $s->no_induk = "25149";
        $s->nama_kelas = "XI-IPA 2";
        $s->save();


        $s = new MenghuniKelas();
        $s->no_induk = "25159";
        $s->nama_kelas = "XI-IPA 2";
        $s->save();

        $s = new MenghuniKelas();
        $s->no_induk = "25169";
        $s->nama_kelas = "XI-IPA 1";
        $s->save();

        $s = new MenghuniKelas();
        $s->no_induk = "25179";
        $s->nama_kelas = "XA";
        $s->save();

        $s = new MenghuniKelas();
        $s->no_induk = "25189";
        $s->nama_kelas = "XB";
        $s->save();
    }
}
