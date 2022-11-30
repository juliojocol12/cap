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
        <h2>Reporte de abortos</h2>
        <h2>Total de abortos: {{$datospersonalespacientescount}}</h2>
    </center>

    <br>
        <div>
            <div align="right">
                <label align="right" for="">Fecha de emisión: {{ date('d-m-Y') }}</label>
            </div>
        </div>
        <br>
    <table class="table  table-striped mt-2 table-responsive">
        <thead style="background-color:#6777ef">                                     
            <th style="display: none;">ID</th>
            <th style="color:#fff;">Nombre de la paciente</th>
            <th style="color:#fff;">DPI</th>
            <th style="color:#fff;">Antecedentes</th>   
            <th style="color:#fff;">Descripción</th>                                 
            <th style="color:#fff;">Fecha de aborto</th>
            
                                                                        
        </thead>
        <tbody>
            @foreach ($datospersonalespacientes as $aborto)
                <tr>
                    
                    <td style="display: none;">{{ $aborto->idAbortos }}</td>  
                    
                    <td>{{ $aborto->NombresPaciente }} {{ $aborto->ApellidosPaciente }}</td>
                    <td>{{ $aborto->CUI }}</td>
                    <td>{{ $aborto->Antecedente }}</td>
                    <td>{{ $aborto->Descripcion }}</td>
                    <td>{{ $aborto->FechaAborto }}</td> 
                </tr>
            @endforeach
        </tbody>
          
    </table>
</body>
</html>