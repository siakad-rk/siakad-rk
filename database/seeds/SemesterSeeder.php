<?php

use Illuminate\Database\Seeder;
use App\TahunAjaran;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $th = new TahunAjaran();
        $th->tahun_ajaran = "2018/2019";
        $th->semester = "Gasal";
        $th->save();

        $th = new TahunAjaran();
        $th->tahun_ajaran = "2018/2019";
        $th->semester = "Genap";
        $th->save();
    }
}
