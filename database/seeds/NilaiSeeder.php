<?php

use Illuminate\Database\Seeder;
use App\User;
use App\MataPelajaran;
use App\TahunAjaran;
use App\Nilai;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //    $users = User::where('kode','SIS')->first();
    	// DB::statement('SET FOREIGN_KEY_CHECKS = 1');
     //    foreach ($users as $key => $user) {
        	$nilai = new Nilai;
        	$nilai->kode = "UH";
        	$nilai->no_induk_siswa = '25169';
        	$nilai->id_mapel = 1;
        	$nilai->id_semester = 1;
            for($a='1';$a<='6';$a++){
                ${'uh'.$a}=null;
            }
        	$nilai->save();

            $nilai = new Nilai;
            $nilai->kode = "TG";
            $nilai->no_induk_siswa = '25169';
            $nilai->id_mapel = 1;
            $nilai->id_semester = 1;
            for($a='1';$a<='6';$a++){
                ${'uh'.$a}=null;
            }
            $nilai->save();


            $nilai = new Nilai;
            $nilai->kode = "FA";
            $nilai->no_induk_siswa = '25169';
            $nilai->id_mapel = 1;
            $nilai->id_semester = 1;
            for($a='1';$a<='6';$a++){
                ${'uh'.$a}=null;
            }
            $nilai->save();


            $nilai = new Nilai;
            $nilai->kode = "PS";
            $nilai->no_induk_siswa = '25169';
            $nilai->id_mapel = 1;
            $nilai->id_semester = 1;
            for($a='1';$a<='6';$a++){
                ${'uh'.$a}=null;
            }
            $nilai->save();
     //    }
    	// DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
