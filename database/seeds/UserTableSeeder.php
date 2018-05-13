<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Ekskul;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = Role::find('ADM');
      $role_teacher  = Role::find('GUR');
      $role_student = Role::find('SIS');

      $teacher = new User();
      $teacher->name = "Rio Anindita P.";
      $teacher->no_induk="12345678";
      $teacher->password =bcrypt("12345678");
      $teacher->kode="GUR";

      $ekskul = Ekskul::find(1);
      $ekskul->user()->save($teacher);

      $student = new User();
      $student->name = "Hendry Wiranto";
      $student->no_induk="25169";
      $student->password =bcrypt("12345678");
      $student->kode="SIS";

      $ekskul = Ekskul::find(2);
      $ekskul->user()->save($student);
    }
}
