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
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Vendedor']);
        $role3 = Role::create(['name'=>'Cliente']);
        $role4 = Role::create(['name'=>'Diseñador']);
        $role5 = Role::create(['name'=>'Programador']);

        // ==> Permisos para el rol Admin
        $permission = Permission::create(['name' => 'admin.home'])->assignRole($role1);
        // Clientes
        $permission = Permission::create(['name' => 'admin.clients.index'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'admin.clients.create'])->assignRole($role1);
        $permission = Permission::create(['name' => 'admin.clients.edit'])->assignRole($role1);
        $permission = Permission::create(['name' => 'admin.clients.destroy'])->assignRole($role1);



    }
}
