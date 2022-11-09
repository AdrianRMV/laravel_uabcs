<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user = new User();
        $user -> name = 'Adrian';
        $user -> lastname = 'Ramirez';
        $user -> email = 'adrian@gmail.com';
        $user -> password = bcrypt('lololol123');

        $user -> save();


        $user = new User();
        $user -> name = 'Lolazo';
        $user -> lastname = 'Perez';
        $user -> email = 'lolazo@gmail.com';
        $user -> password = bcrypt('password');

        $user -> save();
    }
}
