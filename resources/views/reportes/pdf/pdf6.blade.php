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
            <h2>Reporte de cantidad de nacimientos por fechas</h2>
        </center>
        <br>
        <div class="container">
                       
            <div align="right">
                <label align="right" for="">Fecha de emisión: {{ date('d-m-Y') }}</label>
            </div>

            <div align="left">
                <label for="">Total de registros: {{$infantescount}}</label>
                <br>
                <label for="">Fecha de inicio: {{ date('d-m-Y', strtotime($busquedar6FechaI))}}</label>
            </div>

        </div>
        <br>

        <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombres y apellidos </th>
                                    <th style="color:#fff;">Nombre de la madre</th>
                                    <th style="color:#fff;">DPI de la madre</th>
                                    <th style="color:#fff;">Nombre de familiar</th>
                                    <th style="color:#fff;">Parentesco</th>
                                    <th style="color:#fff;">Fecha de nacimiento</th>
                                </thead>
                                
                                <tbody>
                                    @foreach($infantes as $infant)
                                        <tr>
                                            <td style="display: none;">{{ $infant->idInfantes }}</td>
                                            <td>{{$infant->Nombres}}  {{$infant->Apellidos}}</td>
                                            <td>{{$infant->NombresPaciente}} {{$infant->ApellidosPaciente}}</td>
                                            <td>{{$infant->CUI}}</td>
                                            <td>{{$infant->datosfamiliares->NombresFamiliar}} {{$infant->datosfamiliares->ApellidosFamiliar}}</td>
                                            <td>{{$infant->Parentesco}}</td> 
                                            <td>{{ date('d-m-Y', strtotime($infant->FechaNacimiento))}}</td> 
                                                         
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

    </body>
</html>