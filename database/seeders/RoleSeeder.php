<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =       Role::create(['name'=>'Admin']);
        $cliente =     Role::create(['name'=>'Cliente']);
        $vendedor =    Role::create(['name'=>'Vendedor']);
        $designer =    Role::create(['name'=>'Diseñador']);
        $programador = Role::create(['name'=>'Programador']);

        // ==> Permisos para el rol Admin
        $permission = Permission::create(['name' => 'home'])->assignRole($admin);
        // Dashboard
        $permission = Permission::create(['name' => 'dashboard'])->assignRole($admin);
        // Control
        $permission = Permission::create(['name' => 'control'])->assignRole($admin);
        $permission = Permission::create(['name' => 'control.users'])->assignRole($admin);
        $permission = Permission::create(['name' => 'control.roles'])->assignRole($admin);

        // Usuarios
        $permission = Permission::create(['name' => 'users.index'])->assignRole($admin);
        $permission = Permission::create(['name' => 'users.create'])->assignRole($admin);
        $permission = Permission::create(['name' => 'users.edit'])->assignRole($admin);
        $permission = Permission::create(['name' => 'users.destroy'])->assignRole($admin);
        // Clientes
        $permission = Permission::create(['name' => 'clients'])->syncRoles([$admin,$cliente]);
        $permission = Permission::create(['name' => 'clients.index'])->syncRoles([$admin,$cliente]);
        $permission = Permission::create(['name' => 'clients.show'])->syncRoles([$admin,$cliente]);
        $permission = Permission::create(['name' => 'clients.create'])->assignRole($admin);
        $permission = Permission::create(['name' => 'clients.edit'])->assignRole($admin);
        $permission = Permission::create(['name' => 'clients.destroy'])->assignRole($admin);
        // Produccion
        $permission = Permission::create(['name' => 'production'])->assignRole($admin);
        $permission = Permission::create(['name' => 'production.items'])->assignRole($admin);
        // Catalogos
        $permission = Permission::create(['name' => 'catalogs'])->assignRole($admin);




    }
}
