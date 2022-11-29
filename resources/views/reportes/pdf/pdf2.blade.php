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
        <h2>Reporte de pacientes del trimestre: </h2>
        <h2>Total de registros: {{$totalpacientes}}</h2>
    </center>

    <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Fecha</th>
                                    <th style="color:#fff;">Nombre de la paciente</th>
                                    <th style="color:#fff;">DPI</th>
                                    <th style="color:#fff;">No. de control</th>
                                    <th style="color:#fff;">Semana de embarazo</th>
                                </thead>

                                <tbody>
                                    @foreach($controles as $control)
                                        <tr>
                                            <td>{{ date('d-m-Y', strtotime($control->FechaVisita))}}</td>                                              
                                            <td>{{$control->NombresPaciente}} {{$control->ApellidosPaciente}}</td>
                                            <td>{{$control->CUI}}</td>        
                                            <td align="center">{{$control->NoControl}}</td>   
                                            <td align="center">{{$control->SemanasEmbarazo}}</td>                                      
              
                                        </tr>
                                    @endforeach
                                </tbody>

                                
                            </table>
</body>
</html>