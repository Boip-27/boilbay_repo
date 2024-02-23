<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\User;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

       

        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Jefe']);
        $role3 = Role::create(['name'=>'Encargado Transportes']);
        $role4 = Role::create(['name'=>'Encargado Logistica']);
        $role5 = Role::create(['name'=>'Encargado Dependencias']);
        $role6 = Role::create(['name'=>'Encargado Mantenimiento']);
        $role7 = Role::create(['name'=>'Encargado Pertrechos']);

        Permission::create(['name'=>'Ver home'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name'=>'admin.users.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.destroy'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.asignacions.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.asignacions.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.asignacions.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.asignacions.destroy'])->syncRoles([$role1]);
        
        Permission::create(['name'=>'admin.transportes.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name'=>'admin.transportes.create'])->syncRoles([$role1, $role2,$role3]);
        Permission::create(['name'=>'admin.transportes.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name'=>'admin.transportes.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'admin.dependencias.index'])->syncRoles([$role1, $role2, $role5]);
        Permission::create(['name'=>'admin.dependencias.create'])->syncRoles([$role1, $role2, $role5]);
        Permission::create(['name'=>'admin.dependencias.edit'])->syncRoles([$role1, $role2, $role5]);
        Permission::create(['name'=>'admin.dependencias.destroy'])->syncRoles([$role1, $role2]);
        
        Permission::create(['name'=>'admin.logisticas.index'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name'=>'admin.logisticas.create'])->syncRoles([$role1, $role2,$role4]);
        Permission::create(['name'=>'admin.logisticas.edit'])->syncRoles([$role1, $role2,$role4]);
        Permission::create(['name'=>'admin.logisticas.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'admin.mantenimientos.index'])->syncRoles([$role1, $role2, $role6]);
        Permission::create(['name'=>'admin.mantenimientos.create'])->syncRoles([$role1, $role2,$role6]);
        Permission::create(['name'=>'admin.mantenimientos.edit'])->syncRoles([$role1, $role2,$role6]);
        Permission::create(['name'=>'admin.mantenimientos.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'admin.sugerencias.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name'=>'admin.sugerencias.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.sugerencias.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.sugerencias.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'admin.pertrechos.index'])->syncRoles([$role1, $role2, $role7]);
        Permission::create(['name'=>'admin.pertrechos.create'])->syncRoles([$role1, $role7]);
        Permission::create(['name'=>'admin.pertrechos.edit'])->syncRoles([$role1, $role7]);
        Permission::create(['name'=>'admin.pertrechos.destroy'])->syncRoles([$role1, $role2]);
        

    
    }
}
