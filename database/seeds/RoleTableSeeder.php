<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_seed = new Role();
        $role_seed->kode = "ADM";
        $role_seed->deskripsi = "Admininstrator";
        $role_seed->save();

        $role_seed = new Role();
        $role_seed->kode = "GUR";
        $role_seed->deskripsi = "Guru";
        $role_seed->save();

        $role_seed = new Role();
        $role_seed->kode = "SIS";
        $role_seed->deskripsi = "Siswa";
        $role_seed->save();
    }
}
