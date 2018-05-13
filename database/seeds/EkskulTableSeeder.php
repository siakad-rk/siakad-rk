<?php

use Illuminate\Database\Seeder;
use App\Ekskul;

class EkskulTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $ekskul = new Ekskul();
      $ekskul->name = "Kosong";
      $ekskul->save();

      $ekskul = new Ekskul();
      $ekskul->name = "Bola Basket";
      $ekskul->save();

      $ekskul = new Ekskul();
      $ekskul->name = "Futsal";
      $ekskul->save();

      $ekskul = new Ekskul();
      $ekskul->name = "Bola Voli";
      $ekskul->save();
    }
}
