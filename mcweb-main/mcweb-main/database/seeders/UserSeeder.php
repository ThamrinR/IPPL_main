<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => bcrypt('12345678'),
                'no_telp' => '081212345678',
                'provinsi' => 'kalimantan timur',
                'kota' => 'balikpapan',
                'foto_profile' => 'profile.img',
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => bcrypt('12345678'),
                'no_telp' => '081212345679',
                'provinsi' => 'kalimantan timur',
                'kota' => 'balikpapan',
                'foto_profile' => 'profile.img',
            ],
        ]);
    }
}
