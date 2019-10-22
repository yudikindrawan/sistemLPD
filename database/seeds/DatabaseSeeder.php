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
        // $this->call(UsersTableSeeder::class);
<<<<<<< HEAD
=======

        App\roles::create([
            'nama_roles' => 'PegawaiLPD',
        ]);
        App\roles::create([
            'nama_roles' => 'KetuaLPD',
        ]);
        App\roles::create([
            'nama_roles' => 'Kreditur',
        ]);
        App\User::create([
            'roles_id' => 1,
            'nama' => 'Permata',
            'username' => 'pegawailpd',
            'password' => bcrypt('pegawailpd'),
            'email' => 'permatta19@gmail.com',
            'tempat_lahir' => 'Gianyar',
            'tanggal_lahir' => '21-06-97',
            'jk' => 'L',
            'no_telp' => '087987894xxx',
        ]);
        App\User::create([
            'roles_id' => 2,
            'nama' => 'Indah',
            'username' => 'ketualpd',
            'password' => bcrypt('ketualpd'),
            'email' => 'indah19@gmail.com',
            'tempat_lahir' => 'Klungkung',
            'tanggal_lahir' => '21-06-97',
            'jk' => 'L',
            'no_telp' => '087987894xxx',
        ]);
        App\User::create([
            'roles_id' => 3,
            'nama' => 'Yudik Indrawan',
            'username' => 'kreditur',
            'password' => bcrypt('kreditur'),
            'email' => 'yudikidrr@gmail.com',
            'tempat_lahir' => 'Badung',
            'tanggal_lahir' => '21-06-97',
            'jk' => 'L',
            'no_telp' => '087987894xxx',
        ]);
>>>>>>> develop
    }
}
