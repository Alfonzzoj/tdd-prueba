<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Crea un usuario administrador
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'Jesus Alfonzo ',
            'email' => 'jesus@gmail.com',
            'password' => Hash::make('1234'),
        ]);

        // Crea algunos usuarios adicionales
        User::factory(10)->create();
    }
}
