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
            <h2>Reporte de mujeres en el período puerperio</h2>
        </center>
        <br>
        <div>
            <div align="right">
                <label align="right" for="">Fecha de emisión: {{ date('d-m-Y') }}</label>
                <br>
                <label for="">Hora de emisión: {{ date('h:m:s A') }}</label>
            </div>

        </div>
        <br>

        <table class="table  table-striped mt-2 table-responsive">
            <thead style="background-color: #6777ef;">
                <th style="color:#fff;">Número de expediente</th>
                <th style="color:#fff;">Número de control</th>
                <th style="color:#fff;">Semanas despúes del parto</th>
                <th style="color:#fff;">Fecha de visita</th>
                <th style="color:#fff;">Nombre</th>
            </thead>

            <tbody>
                @foreach($controlpospartos as $controlpos)
                <tr>
                    <td align="center">{{$controlpos->Numerodireccion}}</td>
                    <td align="center">{{$controlpos->NoControl}}</td>
                    <td align="center">{{$controlpos->SemanasDespuesParto}}</td>
                    <td align="center">{{ date('d-m-Y', strtotime($controlpos->FechaVisita))}}</td>
                    <td >{{$controlpos->NombresPaciente}} {{$controlpos->ApellidosPaciente}}</td>
                </tr>
                @endforeach
            </tbody>

                                    
        </table>

    </body>
</html>