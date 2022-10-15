<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//spatie
use Spatie\Permission\Models\Permission;


class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //definicion de variable
        $permisos = [
            //tabla users
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            //tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //tabla infante
            'ver-infante',
            'crear-infante',
            'editar-infante',
            'borrar-infante',

            //tabla personal
            'ver-personal',
            'crear-personal',
            'editar-personal',
            'borrar-personal',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
