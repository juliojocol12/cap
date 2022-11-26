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
        @foreach($datospersonalespacientes as $pacientse)
        <h3>Datos de la paciente: {{$pacientse->NombresPaciente}} {{$pacientse->ApellidosPaciente}} </h3>
        @endforeach
    </center>
</body>
</html>