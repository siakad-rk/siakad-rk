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
      $teacher->password =bcrypt("1");
      $teacher->kode="GUR";
      $teacher->posisi="Kelas ia7";
      $teacher->save();

      $teacher = new User();
      $teacher->name = "Retno Purwanti";
      $teacher->no_induk="12345679";
      $teacher->password =bcrypt("1");
      $teacher->kode="GUR";
      $teacher->posisi="Kelas ia5";
      $teacher->save();

      $teacher = new User();
      $teacher->name = "Sianiwati Kristantio";
      $teacher->no_induk="12345680";
      $teacher->password =bcrypt("1");
      $teacher->kode="GUR";
      $teacher->posisi="Kelas ia8";
      $teacher->save();

      $teacher = new User();
      $teacher->name = "Abdul Latif";
      $teacher->no_induk="12345681";
      $teacher->password =bcrypt("1");
      $teacher->kode="GUR";
      $teacher->posisi="Kelas ia2";
      $teacher->save();

      $teacher = new User();
      $teacher->name = "Acihulix";
      $teacher->no_induk="12345682";
      $teacher->password =bcrypt("1");
      $teacher->kode="GUR";
      $teacher->posisi="Labkom A";
      $teacher->save();

      $ekskul = Ekskul::find(1);
      $ekskul->user()->save($teacher);

      $student = new User();
      $student->name = "Steven Candra";
      $student->no_induk="25149";
      $student->password =bcrypt("1");
      $student->kode="SIS";
      $student->posisi="null";
      $student->save();

      $student = new User();
      $student->name = "Achmad Al. Chasni";
      $student->no_induk="25159";
      $student->password =bcrypt("1");
      $student->kode="SIS";
      $student->posisi="null";
      $student->save();
      
      $student = new User();
      $student->name = "Hendry Wiranto";
      $student->no_induk="25169";
      $student->password =bcrypt("1");
      $student->kode="SIS";
      $student->posisi="null";
      $student->save();

      $student = new User();
      $student->name = "Cynthia Dewi T.";
      $student->no_induk="25179";
      $student->password =bcrypt("1");
      $student->kode="SIS";
      $student->posisi="null";
      $student->save();

      $student = new User();
      $student->name = "Aaron Setiawan";
      $student->no_induk="25189";
      $student->password =bcrypt("1");
      $student->kode="SIS";
      $student->posisi="null";
      $student->save();

      $ekskul = Ekskul::find(2);
      $ekskul->user()->save($student);
    }
}
