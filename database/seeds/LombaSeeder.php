<?php

use Illuminate\Database\Seeder;
use App\Lomba;
use Carbon\Carbon;

class LombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lomba = new Lomba();
        $lomba->nama = "Industrial Games";
        $lomba->tanggal = Carbon::create(2018, 6, 31);
        $lomba->lokasi = "Teknik Industri UKP";
        $lomba->save();

        $lomba = new Lomba();
        $lomba->nama = "National Logic Competition";
        $lomba->tanggal = Carbon::create(2018, 7, 15);
        $lomba->lokasi = "Informatika ITS";
        $lomba->save();

        $lomba = new Lomba();
        $lomba->nama = "National Programming Contest";
        $lomba->tanggal = Carbon::create(2018, 7, 6);
        $lomba->lokasi = "Informatika ITS";
        $lomba->save();

        $lomba = new Lomba();
        $lomba->nama = "OMITS";
        $lomba->tanggal = Carbon::create(2018, 6, 25);
        $lomba->lokasi = "Matematika ITS";
        $lomba->save();
    }
}
