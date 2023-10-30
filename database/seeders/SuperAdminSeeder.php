<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = User::create([
            'name' => 'Alex Gonzalez',
            'email' => 'adavid2103@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        //$rol = Role::create(['name' => 'Administrador']);

        //$permisos = Permission::pluck('id', 'id')->all();

       // $rol->syncPermissions($permisos);

        $usuario->assignRole('administrador');
    }
}
