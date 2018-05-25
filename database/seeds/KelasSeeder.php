<?php

use Illuminate\Database\Seeder;
use App\Kelas;
class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $k = new Kelas();
        $k->nama_kelas = "XA";
        $k->jenjang = 10;
        $k->penjurusan = null;
        $k->alfabet = "A";
        $k->save();

        $k = new Kelas();
        $k->nama_kelas = "XB";
        $k->jenjang = 10;
        $k->penjurusan = null;
        $k->alfabet = "B";
        $k->save();

		$k = new Kelas();
        $k->nama_kelas = "XI-IPA 1";
        $k->jenjang = 11;
        $k->penjurusan = "IPA";
        $k->alfabet = "1";
        $k->save();

        $k = new Kelas();
        $k->nama_kelas = "XI-IPA 2";
        $k->jenjang = 11;
        $k->penjurusan = "IPA";
        $k->alfabet = "2";
        $k->save();

        $k = new Kelas();
        $k->nama_kelas = "XI-IPS 1";
        $k->jenjang = 11;
        $k->penjurusan = "IPS";
        $k->alfabet = "1";
        $k->save();
    }
}
