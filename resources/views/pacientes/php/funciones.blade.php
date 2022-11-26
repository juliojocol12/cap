<?php
function calculaTiempo($fechaInicio,$fechaFin){
    $datetime1 = date_create($fechaInicio);
    $datetime2 = date_create($fechaFin);
    $interval = date_diff($datetime1, $datetime2);

    $tiempo = array();

    foreach ($interval as $valor){
        $tiempo[]=$valor;
    }
    return $tiempo;
}

?>