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
        <h2>Reporte de vacunas</h2>
    </center>

    <br>
    <div align="right">
        <label for="">Fecha de reporte: {{ date('d-m-Y') }}</label>
    </div>

    <br>
    <table class="table  table-striped mt-2 table-responsive">
        <thead style="background-color: #6777ef;">
            <th style="display: none;">ID</th>
            <th style="color:#fff;">Nombre de la vacuna</th>
            <th style="color:#fff;">Cantidad</th>
        </thead>

        <tbody>
            <tr>
                <td>Td</td>
                <td>{{$vacunastd}}</td>
            </tr>
            <tr>
                <td>Covid</td>
                <td>{{$vacunascovid}}</td>
                                    </tr>
                                    <tr>
                                        <td>Influenza</td>
                                        <td>{{$vacunainfluenza}}</td>
                                    </tr>
                                    <tr>
                                        <td>TdAp</td>
                                        <td>{{$vacunastdap}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
</body>
</html>