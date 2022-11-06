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
            
            //tabla pueblo
            'ver-pueblo',
            'crear-pueblo',
            'editar-pueblo',
            'borrar-pueblo',

            //tabla establecimientosaludo
            'ver-establecimientosaludo',
            'crear-establecimientosaludo',
            'editar-establecimientosaludo', 
            'borrar-establecimientosaludo',

            //tabla datospersonalespaciente
            'ver-datospersonalespaciente',
            'crear-datospersonalespaciente',
            'editar-datospersonalespaciente', 
            'borrar-datospersonalespaciente',

            //tabla datosfamiliares
            'ver-datosfamiliare',
            'crear-datosfamiliare',
            'editar-datosfamiliare', 
            'borrar-datosfamiliare',

            //tabla fcprenatalpostparto
            'ver-fcprenatalpostparto',
            'crear-fcprenatalpostparto',
            'editar-fcprenatalpostparto', 
            'borrar-fcprenatalpostparto',

            //tabla fcevaluacionposparto
            'ver-fcevaluacionposparto',
            'crear-fcevaluacionposparto',
            'editar-fcevaluacionposparto', 
            'borrar-fcevaluacionposparto',

            //tabla controle
            'ver-controle',
            'crear-controle',
            'editar-controle', 
            'borrar-controle',

            //tabla controlposparto
            'ver-controlposparto',
            'crear-controlposparto',
            'editar-controlposparto', 
            'borrar-controlposparto',
            

            

        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
