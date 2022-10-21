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

<<<<<<< HEAD
            //tabla personal
            'ver-personal',
            'crear-personal',
            'editar-personal',
            'borrar-personal',

            //tabla primercontrolpostparto
            'ver-primercontrolpostparto',
            'crear-primercontrolpostparto',
            'editar-primercontrolpostparto',
            'borrar-primercontrolpostparto',

            //tabla conductapostparto
            'ver-conductapostparto',
            'crear-conductapostparto',
            'editar-conductapostparto',
            'borrar-conductapostparto',

            //tabla padecimientoinfate
            'ver-padecimientoinfate',
            'crear-padecimientoinfate',
            'editar-padecimientoinfate',
            'borrar-padecimientoinfate',

            //tabla clasificacionposparto
            'ver-clasificacionposparto',
            'crear-clasificacionposparto',
            'editar-clasificacionposparto',
            'borrar-clasificacionposparto',

            //tabla conserjeriaposparto
            'ver-conserjeriaposparto',
            'crear-conserjeriaposparto',
            'editar-conserjeriaposparto',
            'borrar-conserjeriaposparto',

            //tabla establecimientosaludo
            'ver-establecimientosaludo',
            'crear-establecimientosaludo',
            'editar-establecimientosaludo',
            'borrar-establecimientosaludo',
=======
            //tabla pueblo
            'ver-pueblo',
            'crear-pueblo',
            'editar-pueblo',
            'borrar-pueblo',
            
            //tabla datospersonalespaciente
            'ver-datospersonalespaciente',
            'crear-datospersonalespaciente',
            'editar-datospersonalespaciente',
            'borrar-datospersonalespaciente',
            
>>>>>>> Jocol
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
