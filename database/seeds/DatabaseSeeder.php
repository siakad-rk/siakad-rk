<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EkskulTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(MaPelSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(NilaiSeeder::class);
    }
}
