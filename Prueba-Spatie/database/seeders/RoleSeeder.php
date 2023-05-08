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
     */
    public function run(): void
    {
        /*
         * Admin => all
         * Manager => Ver Listado Usuarios y ver usuario
         * Developer => dashboard
         * */

       $admin = Role::create(['name'=>'admin']);
       $manager = Role::create(['name'=>'manager']);
       $developer = Role::create(['name'=>'developer']);

        /*
          * Los permisos son por todos los metodos
          * */
       Permission::create([
           'name' => 'dashboard',
           'description' => 'Permiso del Dashboard'
       ])->syncRoles([$admin,$manager]);
       Permission::create([
           'name' => 'users.index',
           'description' => 'Permiso Para listar Usuarios'
       ])->syncRoles([$admin,$manager]);
       Permission::create([
           'name' => 'users.create',
           'description' => 'Permiso para crear Usuario'
       ])->syncRoles([$admin]);
    }
}
