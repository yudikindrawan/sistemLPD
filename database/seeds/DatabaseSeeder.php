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

        App\roles::create([
            'nama_roles' => 'PegawaiLPD'
        ]);
        App\roles::create([
            'nama_roles' => 'KetuaLPD'
        ]);
        App\roles::create([
            'nama_roles' => 'Kreditur'
        ]);
        App\roles::create([
            'nama_roles' => 'Admin'
        ]);
        App\User::create([
            'roles_id' => 4,
            'nama' => 'Indah Permata',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'indahpermatta19@gmail.com',
            'no_telp' => '087987894xxx',
        ]);
        App\User::create([
            'roles_id' => 1,
            'nama' => 'Permata',
            'username' => 'pegawailpd',
            'password' => bcrypt('pegawailpd'),
            'email' => 'permatta19@gmail.com',
            'no_telp' => '087987894xxx',
        ]);
        App\User::create([
            'roles_id' => 2,
            'nama' => 'Indah',
            'username' => 'ketualpd',
            'password' => bcrypt('ketualpd'),
            'email' => 'indah19@gmail.com',
            'no_telp' => '087987894xxx',
        ]);
        App\User::create([
            'roles_id' => 3,
            'nama' => 'Yudik Indrawan',
            'username' => 'kreditur',
            'password' => bcrypt('kreditur'),
            'email' => 'yudikidrr@gmail.com',
            'no_telp' => '087987894xxx',
        ]);
    }
}
