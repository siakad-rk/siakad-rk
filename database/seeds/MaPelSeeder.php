<?php

use Illuminate\Database\Seeder;
use App\MataPelajaran;
class MaPelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $mp = new MataPelajaran();
      $mp->pelajaran = "Agama";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Kewarganegaraan";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Bahasa Indonesia";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Bahasa Inggris";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Matematika";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Biologi";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Fisika";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Kimia";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Sosiologi";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Geografi";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Ekonomi";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Sejarah";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Olahraga";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "TIK";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Seni Budaya";
      $mp->save();
      $mp = new MataPelajaran();
      $mp->pelajaran = "Bahasa Mandarin";
      $mp->save();
    }
}
