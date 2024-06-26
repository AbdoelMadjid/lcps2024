<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $master = User::create([
            'name' => 'master',
            'email' => 'master@gmail.com',
            'password' => bcrypt('master212'),
        ]);
        $master->assignRole('master');

        $admin = User::create([
            'name' => 'adminstrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin212'),
        ]);
        $admin->assignRole('admin');

        $gurumapel = User::create([
            'name' => 'gurumapel',
            'email' => 'gurumapel@gmail.com',
            'password' => bcrypt('gurumapel212'),
        ]);
        $gurumapel->assignRole('gmp');

        $walikelas = User::create([
            'name' => 'walikelas',
            'email' => 'walikelas@gmail.com',
            'password' => bcrypt('walikelas212'),
        ]);
        $walikelas->assignRole('walas');

        $siswa = User::create([
            'name' => 'siswa',
            'email' => 'siswa@gmail.com',
            'password' => bcrypt('siswa212'),
        ]);
        $siswa->assignRole('siswa');
    }
}
