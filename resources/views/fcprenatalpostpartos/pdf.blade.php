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
        @foreach($fcprenatalpostpartos as $fcprenatalpostparto)
        <h3>Datos de la paciente: {{$fcprenatalpostparto->NombresPaciente}} {{$fcprenatalpostparto->ApellidosPaciente}} </h3>
        @endforeach
    </center>

    <div id="mostrarFecha"><h5>Fecha de emisión:</h5><script type="text/javascript">mostrarFecha();</script></div>
    
     <!--Tabla 1-->
    <table >
        <div class="container">
            <h3 class="page__heading">Datos generales</h3> <p></p>
        </div> 
        <tbody >
            @foreach($fcprenatalpostpartos as $fcprenatalpostparto)
            <tr>
                <th scope="row" align="left">No. Expediente</th>
                <td width="350" height="10">{{$fcprenatalpostparto->Numerodireccion}}</td>
            </tr>
            <tr>
                <th scope="row" align="left">Fecha</th>
                <td>{{$fcprenatalpostparto->Fecha}}</td>
            </tr>

            <tr>
                <th scope="row" align="left">Establecimiento Salud</th>
                <td>{{$fcprenatalpostparto->establecimientosaludos->Nombre}}</td>
            </tr>    

            <tr>
                <th scope="row" align="left">Datos de paciente</th>
                <td>{{$fcprenatalpostparto->NombresPaciente}} {{$fcprenatalpostparto->ApellidosPaciente}}</td>
            </tr>    

            <tr>
                <th scope="row" align="left">Fecha de nacimiento</th>
                <td data-order="DD/MM/YYYY">{{$fcprenatalpostparto->Fecha}}</td>
            </tr>

            <tr>
                <th scope="row" align="left">DPI</th>
                <td>{{$fcprenatalpostparto->CUI}}</td>
            </tr>

            <tr>
                <th scope="row" align="left">Direccion</th>
                <td>{{$fcprenatalpostparto->Descripciondireccion}}</td>
            </tr>

            <tr>
                <th scope="row" align="left">Teléfono</th>
                <td>{{$fcprenatalpostparto->Telefono}}</td>
            </tr>

            <tr>
                <th scope="row" align="left">Celular</th>
                <td>{{$fcprenatalpostparto->Celular}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!--Tabla 2 -->
    <table>
        <div class="container">
            <h3 class="page__heading">Evaluación de signos y sintomas de peligro</h3> <p></p> 
        </div>
        <tbody >
            @foreach($fcprenatalpostpartos as $fcprenatalpostparto)
            <tr>
                <th scope="row" ">Hemorragia vaginal</th>
                <td width="300" height="10">{{$fcprenatalpostparto->HemorragiaVaginal}}</td>
            </tr>
            <tr>
                <th scope="row" ">Dolor de cabeza severa</th>
                <td>{{$fcprenatalpostparto->DolordeCabeza}}</td>
            </tr>

            <tr>
                <th scope="row" ">Vision borrosa</th>
                <td>{{$fcprenatalpostparto->VisionBorrosa}}</td>
            </tr>    

            <tr>
                <th scope="row" ">Convulsion</th>
                <td>{{$fcprenatalpostparto->Convulsion}}</td>
            </tr>    

            <tr>
                <th scope="row" ">Dolor abdominal severo</th>
                <td>{{$fcprenatalpostparto->DolorAbdominal}}</td>
            </tr>

            <tr>
                <th scope="row" ">Presion arterial alta</th>
                <td>{{$fcprenatalpostparto->PresionArterial}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fiebre</th>
                <td>{{$fcprenatalpostparto->Fiebre}}</td>
            </tr>

            <tr>
                <th scope="row" ">Presentaciones fetales</th>
                <td>{{$fcprenatalpostparto->PresentacionesFetales}}</td>
            </tr>

            <tr>
                <th scope="row" ">Si refirio a la paciente</th>
                <td>{{$fcprenatalpostparto->RegistrodeReferencia}}</td>
            </tr>

            <tr>
                <th scope="row" ">Motivo consulta</th>
                <td>{{$fcprenatalpostparto->MotivoConsulta}}</td>
            </tr>

            <tr>
                <th scope="row" ">Historia de la enfermedad actual</th>
                <td>{{$fcprenatalpostparto->HistoriaEnfermedadActual}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

<br> <br> <br> <br><br><br> 
    <!--tabla 3 -->

    <table >
        <div class="container">
            <h3 class="page__heading">Antrecedentes: Gineco/Obstétricos</h3> <p></p> 
        </div>
        <tbody >
            @foreach($fcprenatalpostpartos as $fcprenatalpostparto)
            <tr>
                <th scope="row" ">Fecha ultima regla</th>
                <td width="300" height="10">{{$fcprenatalpostparto->FechaUltimaRegla}}</td>
            </tr>
            <tr>
                <th scope="row" ">Número de gestas</th>
                <td>{{$fcprenatalpostparto->NoGestas}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de partos</th>
                <td>{{$fcprenatalpostparto->Partos}}</td>
            </tr>    

            <tr>
                <th scope="row" ">Abortos</th>
                <td>{{$fcprenatalpostparto->Aborto}}</td>
            </tr>    

            <tr>
                <th scope="row" ">Aborto consecutivo</th>
                <td>{{$fcprenatalpostparto->AbortoConsecutivo}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de LIU</th>
                <td>{{$fcprenatalpostparto->NoLIU}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de nacidos vivos</th>
                <td>{{$fcprenatalpostparto->NacidosVivos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de nacidos muertos</th>
                <td>{{$fcprenatalpostparto->NacidosMuertos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de hijos vivos</th>
                <td>{{$fcprenatalpostparto->HijosVivos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de hijos muertos</th>
                <td>{{$fcprenatalpostparto->HijosMuertos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de No. cesareas</th>
                <td>{{$fcprenatalpostparto->NoCesareas}}</td>
            </tr>

            <tr>
                <th scope="row" ">Embarazo multiple</th>
                <td>{{$fcprenatalpostparto->EmbarazoMultiples}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fecha de ultimo parto</th>
                <td>{{$fcprenatalpostparto->FechaUltimoParto}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de nacidos antes de 8 meses</th>
                <td>{{$fcprenatalpostparto->NacidosAntesOchoMeses}}</td>
            </tr>

            <tr>
                <th scope="row" ">Pre eclampsia</th>
                <td>{{$fcprenatalpostparto->PreEclampsia}}</td>
            </tr>

            <tr>
                <th scope="row" ">Último RN Peso (-) 5 lb y media</th>
                <td>{{$fcprenatalpostparto->UltimoRNPesoCincolb}}</td>
            </tr>

            <tr>
                <th scope="row" ">Último RN Peso (+) 7 lb 12 onz</th>
                <td>{{$fcprenatalpostparto->UltimoRNPesoSietelb}}</td>
            </tr>

            <tr>
                <th scope="row" ">Detección de cancer de cervix</th>
                <td>{{$fcprenatalpostparto->DeteccionCancerCervix}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fecha de deteccion de cancer</th>
                <td>{{$fcprenatalpostparto->FechaDeteccionCancer}}</td>
            </tr>

            <tr>
                <th scope="row" ">Resultado normal</th>
                <td>{{$fcprenatalpostparto->ResultadoNormal}}</td>
            </tr>

            <tr>
                <th scope="row" ">Método de planificación familiar</th>
                <td>{{$fcprenatalpostparto->MetodoPlanificacionFamiliar}}</td>
            </tr>

            <tr>
                <th scope="row" ">Cuál fue el método que utilizo</th>
                <td>{{$fcprenatalpostparto->CualMetodoPlanificacionF}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br> <br> <br> <br><br><br> <br><br><br><br>
    <!--tabla 4 -->
    <table >
        <div class="container">
            <h3 class="page__heading">Antrecedentes: Médicos</h3> <p></p> 
        </div>
        <tbody >
            @foreach($fcprenatalpostpartos as $fcprenatalpostparto)
            <tr>
                <th scope="row" ">Asma Bronquial</th>
                <td width="300" height="10">{{$fcprenatalpostparto->AsmaBronquial}}</td>
            </tr>
            <tr>
                <th scope="row" ">Hipertensión Arterial</th>
                <td>{{$fcprenatalpostparto->HipertensionArterial}}</td>
            </tr>

            <tr>
                <th scope="row" ">Cáncer</th>
                <td>{{$fcprenatalpostparto->Cancer}}</td>
            </tr>    

            <tr>
                <th scope="row" ">ITS</th>
                <td>{{$fcprenatalpostparto->ITS}}</td>
            </tr>    

            <tr>
                <th scope="row" ">Chagas</th>
                <td>{{$fcprenatalpostparto->Chagas}}</td>
            </tr>

            <tr>
                <th scope="row" ">Toma Medicamentos</th>
                <td>{{$fcprenatalpostparto->TomaMedicamentos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Trastorno PsicoSocial</th>
                <td>{{$fcprenatalpostparto->TrastornoPiscoSocial}}</td>
            </tr>

            <tr>
                <th scope="row" ">Violencia basada en género</th>
                <td>{{$fcprenatalpostparto->ViolenciaGenero}}</td>
            </tr>

            <tr>
                <th scope="row" ">Diabetes</th>
                <td>{{$fcprenatalpostparto->Diabetes}}</td>
            </tr>

            <tr>
                <th scope="row" ">Cardiopatia</th>
                <td>{{$fcprenatalpostparto->Cardiopatia}}</td>
            </tr>

            <tr>
                <th scope="row" ">Tuberculosis</th>
                <td>{{$fcprenatalpostparto->Tuberculosis}}</td>
            </tr>

            <tr>
                <th scope="row" ">Neuropatia</th>
                <td>{{$fcprenatalpostparto->Neuropatia}}</td>
            </tr>

            <tr>
                <th scope="row" ">Infecciones Urinarias</th>
                <td>{{$fcprenatalpostparto->InfeccionesUrinarias}}</td>
            </tr>

            <tr>
                <th scope="row" ">Violencia InrtraFamiliar</th>
                <td>{{$fcprenatalpostparto->ViolenciaInrtraFamiliar}}</td>
            </tr>

            <tr>
                <th scope="row" ">Tipo de Sangre</th>
                <td>{{$fcprenatalpostparto->TipoSangre}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fuma</th>
                <td>{{$fcprenatalpostparto->Fuma}}</td>
            </tr>

            <tr>
                <th scope="row" ">Ingiere bebidas alcohólicas</th>
                <td>{{$fcprenatalpostparto->BebidasAlcoholicas}}</td>
            </tr>

            <tr>
                <th scope="row" ">Consumo de drogas</th>
                <td>{{$fcprenatalpostparto->ConsumoDrogas}}</td>
            </tr>

            <tr>
                <th scope="row" ">Antecedentes de vacuna Td</th>
                <td>{{$fcprenatalpostparto->AntecedentesVacunas}}</td>
            </tr>

            <tr>
                <th scope="row" ">Dosis de Vacuna</th>
                <td>{{$fcprenatalpostparto->DosisVacuna}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fecha de Ultima Dosis</th>
                <td>{{$fcprenatalpostparto->FechaUltimaDosis}}</td>
            </tr>

            <tr>
                <th scope="row" ">SR</th>
                <td>{{$fcprenatalpostparto->SR}}</td>
            </tr>

            <tr>
                <th scope="row" ">Quirurgicos</th>
                <td>{{$fcprenatalpostparto->Quirurgicos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Otros Antecedentes</th>
                <td>{{$fcprenatalpostparto->OtrosAntecedentes}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>