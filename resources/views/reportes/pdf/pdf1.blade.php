<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <img src="img/MSalud.jpg" alt="" align="left">
    <img src="img/Cajola_CAP.jpg" alt="" align="right">

    <link rel="stylesheet" href="{{ public_path('css/pdf.css') }}" type="text/css">

    <script type="text/javascript" src="js/mostrar.js"></script>

</head>
<body>
    <center>
        <h2>Reporte de pacientes por rango de edad</h2>
    </center>
    <br>
        <div>
            <div align="right">
                <label align="right" for="">Fecha de emisión: {{ date('d-m-Y') }}</label>
            </div>
        </div>
        <br>
    <table class="table  table-striped mt-2 table-responsive">
        <thead style="background-color: #6777ef;">
            <th style="color:#fff;">Nombres</th>
            <th style="color:#fff;">Apellidos</th>
            <th style="color:#fff;">Fecha nacimiento</th>
            <th style="color:#fff;">DPI</th>
            <th style="color:#fff;">Profesión</th>
            <th style="color:#fff;">Dirección</th>
            <th style="color:#fff;">Municipio</th>
            <th style="color:#fff;">Celular</th>
            <th style="color:#fff;">Pueblo</th>
            <th style="color:#fff;">Estado civil</th>
            <th style="color:#fff;">Peso</th>
            <th style="color:#fff;">Edad</th>
        </thead>

        <tbody>
            @foreach($datospersonalespacientes as $paciente)
                <tr "table-active">
              
                    <td>{{$paciente->NombresPaciente}}</td>
                    <td>{{$paciente->ApellidosPaciente}}</td> 
                    <td>{{$paciente->FechaNaciemientoPaciente}}</td> 
                    <td>{{$paciente->CUI}}</td> 
                    <td>{{$paciente->ProfesionOficio}}</td> 
                    <td>{{$paciente->Descripciondireccion}}</td> 
                    <td>{{$paciente->Municipiodep}}</td>                                    
                    <td>{{$paciente->Celular}}</td>
                    <td>{{$paciente->Nombre}}</td>
                    <td>{{$paciente->EstadoCivil}}</td>
                    <td>{{$paciente->Peso}}</td>
                    <td>{{$paciente->Edad}}</td>
 
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>