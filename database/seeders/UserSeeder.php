<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        ])->assignRole('Admin');

        User::create([
            'name' => 'Jesus Alfonzo ',
            'email' => 'jesus@gmail.com',
            'password' => Hash::make('1234'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Jesus vendedor ',
            'email' => 'vendedor@gmail.com',
            'password' => Hash::make('1234'),
        ])->assignRole('Vendedor');

        User::create([
            'name' => 'Jesus Cliente ',
            'email' => 'client@gmail.com',
            'password' => Hash::make('1234'),
        ])->assignRole('Cliente');

        // Crea algunos usuarios adicionales
        User::factory(20)->create();
    }
}
