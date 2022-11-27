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
        <h2>Ficha Clinica Prenatal</h2>
        <h2>Total de registros: {{$totalpacientes}}</h2>
    </center>

    <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="color:#fff;">Nombres</th>
                                    <th style="color:#fff;">Apellidos</th>
                                    <th style="color:#fff;">DPI</th>
                                    <th style="color:#fff;">Profesión</th>
                                    <th style="color:#fff;">Celular</th>
                                    <th style="color:#fff;">Estado civil</th>
                                    <th style="color:#fff;">Tipo sanguíneo</th>
                                </thead>

                                <tbody>
                                    @foreach($datospersonalespacientes as $paciente)
                                        <tr "table-active">
                                      
                                            <td>{{$paciente->NombresPaciente}}</td>
                                            <td>{{$paciente->ApellidosPaciente}}</td> 
                                            <td>{{$paciente->CUI}}</td> 
                                            <td>{{$paciente->ProfesionOficio}}</td>                               
                                            <td align="center">{{$paciente->Celular}}</td>
                                            <td align="center">{{$paciente->EstadoCivil}}</td>
                                            <td align="center">{{$paciente->TipoSanguineo}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
</body>
</html>