<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'jabatan' => 'Ketua Bawaslu Kabupaten/Kota',
            'tgl_lahir' => '2000/09/09',
            'no_hp' => '082139395508',
            'no_wa' => '082139395508',
            'alamat' => 'Cemoroharjo, Candibinangun, Pakem',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'roles' => 'admin'
        ]);
    }
}
