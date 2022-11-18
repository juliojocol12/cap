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
            'home-usuario',
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            //tabla roles
            'home-rol',
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //tabla infante
            'home-infante',
            'ver-infante',
            'crear-infante',
            'editar-infante',
            'borrar-infante',

            //tabla personal
            'home-personal',
            'ver-personal',
            'crear-personal',
            'editar-personal',
            'borrar-personal',
            
            //tabla pueblo
            'home-pueblo',
            'ver-pueblo',
            'crear-pueblo',
            'editar-pueblo',
            'borrar-pueblo',

            //tabla establecimientosaludo
            'home-establecimientosaludo',
            'ver-establecimientosaludo',
            'crear-establecimientosaludo',
            'editar-establecimientosaludo', 
            'borrar-establecimientosaludo',

            //tabla datospersonalespaciente
            'home-datospersonalespaciente',
            'ver-datospersonalespaciente',
            'crear-datospersonalespaciente',
            'editar-datospersonalespaciente', 
            'borrar-datospersonalespaciente',

            //tabla datosfamiliares
            'home-datosfamiliare',
            'ver-datosfamiliare',
            'crear-datosfamiliare',
            'editar-datosfamiliare', 
            'borrar-datosfamiliare',

            //tabla fcprenatalpostparto
            'home-fcprenatalpostparto',
            'ver-fcprenatalpostparto',
            'crear-fcprenatalpostparto',
            'editar-fcprenatalpostparto', 
            'borrar-fcprenatalpostparto',

            //tabla controle
            'home-controle',
            'ver-controle',            
            'crear-controle',
            'editar-controle', 
            'borrar-controle',

            //tabla fcevaluacionposparto
            'home-fcevaluacionposparto',
            'ver-fcevaluacionposparto',
            'crear-fcevaluacionposparto',
            'editar-fcevaluacionposparto', 
            'borrar-fcevaluacionposparto',
            

            //tabla controlposparto
            'home-controlposparto',
            'ver-controlposparto',
            'crear-controlposparto',
            'editar-controlposparto', 
            'borrar-controlposparto',
            

            //tabla fullcalendar
            'home-fullcalendar',
            'ver-fullcalendar',
            'crear-fullcalendar',
            'editar-fullcalendar', 
            'borrar-fullcalendar',

            //Tabla vacunas
            'home-vacunas',
            'ver-vacuna',
            'crear-vacuna',
            'editar-vacuna', 
            'borrar-vacuna',

            //tabla vacunainfante
            'home-vacunainfante',
            'ver-vacunainfante',
            'crear-vacunainfante',
            'editar-vacunainfante', 
            'borrar-vacunainfante',

            //tabla Aborto
            'home-Aborto',
            'ver-Aborto',
            'crear-Aborto',
            'editar-Aborto', 
            'borrar-Aborto',

            //tabla fichamspasriego
            'home-fichamspasriego',
            'ver-fichamspasriego',
            'crear-fichamspasriego',
            'editar-fichamspasriego', 
            'borrar-fichamspasriego',

            
            

        ];

        $estados = [
            'Si',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
