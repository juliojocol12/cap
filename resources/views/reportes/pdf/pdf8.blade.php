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
            <h2>Reporte de etapa de vacunación para infante</h2>
        </center>
        <br>
        <div class="container">            
            <div align="right">
                <label align="right" for="">Fecha de emisión: {{ date('d-m-Y') }}</label>
            </div>

            <div align="left">
                <label for="">Total de vacunas TdAp suministradas: {{$infantesTdApscount}} </label>
                <br>
                <label for="">Total de vacunas Influenza suministradas: {{$infantesinfluenzascount}} </label>
                <br>
                <label for="">Total de vacunas Td suministradas: {{$infantescount}} </label>
                <br>
                <label for="">Total de vacunas Covid-19 suministradas: {{$infantesCovidscount}} </label>
            </div>
        </div>
        <br>

        <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombres y apellidos </th>        
                                    <th style="color:#fff;">Género </th>                             
                                    <th style="color:#fff;">Vacuna</th>
                                </thead>
                                
                                <tbody>
                                    @foreach($infantes as $infant)
                                        <tr>
                                            <td style="display: none;">{{ $infant->idInfantes }}</td>
                                            <td>{{$infant->Nombres}}  {{$infant->Apellidos}}</td>
                                            <td>{{$infant->Genero}}</td>
                                            <td>{{$infant->NombreVacuna}}</td>
                                        </tr>
                                    @endforeach


                                    @foreach($infantesinfluenzas as $infantesinfluenza)
                                        <tr>
                                            <td style="display: none;">{{ $infantesinfluenza->idInfantes }}</td>
                                            <td>{{$infantesinfluenza->Nombres}}  {{$infantesinfluenza->Apellidos}}</td>
                                            <td>{{$infantesinfluenza->Genero}}</td>
                                            <td>{{$infantesinfluenza->NombreVacuna}}</td>
                                        </tr>
                                    @endforeach

                                    @foreach($infantesCovids as $infantesCovid)
                                        <tr>
                                            <td style="display: none;">{{ $infantesCovid->idInfantes }}</td>
                                            <td>{{$infantesCovid->Nombres}}  {{$infantesCovid->Apellidos}}</td>
                                            <td>{{$infantesCovid->Genero}}</td>
                                            <td>{{$infantesCovid->NombreVacuna}}</td>
                                        </tr>
                                    @endforeach

                                    @foreach($infantesTdAps as $infantesTdAp)
                                        <tr>
                                            <td style="display: none;">{{ $infantesTdAp->idInfantes }}</td>
                                            <td>{{$infantesTdAp->Nombres}}  {{$infantesTdAp->Apellidos}}</td>
                                            <td>{{$infantesTdAp->Genero}}</td>
                                            <td>{{$infantesTdAp->NombreVacuna}}</td>
                                        </tr>
                                    @endforeach

                                    
                                </tbody>

                            </table>

    </body>
</html>