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
        <h3>Datos de la paciente: {{$fcprenatalpostpartos->NombresPaciente}} {{$fcprenatalpostpartos->ApellidosPaciente}}</h3>
    </center>

    <div id="mostrarFecha"><h5>Fecha de emisión:</h5><script type="text/javascript">mostrarFecha();</script></div>
    
     <!--Tabla 1-->
    <table >
        <div class="container">
            <h3 class="page__heading">Datos generales</h3> <p></p>
        </div> 
        <tbody >
            <tr>
                <th scope="row" align="left">No. Expediente</th>
                <td width="350" height="10">{{$fcprenatalpostpartos->Numerodireccion}}</td>
            </tr>
            <tr>
                <th scope="row" align="left">Fecha</th>
                <td>{{$fcprenatalpostpartos->Fecha}}</td>
            </tr>

            <tr>
                <th scope="row" align="left">Establecimiento Salud</th>
                <td>{{$fcprenatalpostpartos->establecimientosaludos->Nombre}}</td>
            </tr>    

            <tr>
                <th scope="row" align="left">Datos de paciente</th>
                <td>{{$fcprenatalpostpartos->NombresPaciente}} {{$fcprenatalpostpartos->ApellidosPaciente}}</td>
            </tr>    

            <tr>
                <th scope="row" align="left">Fecha de nacimiento</th>
                <td data-order="DD/MM/YYYY">{{$fcprenatalpostpartos->FechaNaciemientoPaciente}}</td>
            </tr>

            <tr>
                <th scope="row" align="left">DPI</th>
                <td>{{$fcprenatalpostpartos->CUI}}</td>
            </tr>

            <tr>
                <th scope="row" align="left">Direccion</th>
                <td>{{$fcprenatalpostpartos->Descripciondireccion}} {{$fcprenatalpostpartos->Grupodireccion}} {{$fcprenatalpostpartos->Numerodireccion}}</td>
            </tr>

            <tr>
                <th scope="row" align="left">Teléfono</th>
                <td>{{$fcprenatalpostpartos->Telefono}}</td>
            </tr>

            <tr>
                <th scope="row" align="left">Celular</th>
                <td>{{$fcprenatalpostpartos->Celular}}</td>
            </tr>
        </tbody>
    </table>

    <!--Tabla 2 -->
    <table>
        <div class="container">
            <h3 class="page__heading">Evaluación de signos y sintomas de peligro</h3> <p></p> 
        </div>
        <tbody >
            <tr>
                <th scope="row" ">Hemorragia vaginal</th>
                <td width="300" height="10">{{$fcprenatalpostpartos->HemorragiaVaginal}}</td>
            </tr>
            <tr>
                <th scope="row" ">Dolor de cabeza severa</th>
                <td>{{$fcprenatalpostpartos->DolordeCabeza}}</td>
            </tr>

            <tr>
                <th scope="row" ">Vision borrosa</th>
                <td>{{$fcprenatalpostpartos->VisionBorrosa}}</td>
            </tr>    

            <tr>
                <th scope="row" ">Convulsion</th>
                <td>{{$fcprenatalpostpartos->Convulsion}}</td>
            </tr>    

            <tr>
                <th scope="row" ">Dolor abdominal severo</th>
                <td>{{$fcprenatalpostpartos->DolorAbdominal}}</td>
            </tr>

            <tr>
                <th scope="row" ">Presion arterial alta</th>
                <td>{{$fcprenatalpostpartos->PresionArterial}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fiebre</th>
                <td>{{$fcprenatalpostpartos->Fiebre}}</td>
            </tr>

            <tr>
                <th scope="row" ">Presentaciones fetales</th>
                <td>{{$fcprenatalpostpartos->PresentacionesFetales}}</td>
            </tr>

            <tr>
                <th scope="row" ">Si refirio a la paciente</th>
                <td>{{$fcprenatalpostpartos->RegistrodeReferencia}}</td>
            </tr>

            <tr>
                <th scope="row" ">Motivo consulta</th>
                <td>{{$fcprenatalpostpartos->MotivoConsulta}}</td>
            </tr>

            <tr>
                <th scope="row" ">Historia de la enfermedad actual</th>
                <td>{{$fcprenatalpostpartos->HistoriaEnfermedadActual}}</td>
            </tr>
        </tbody>
    </table>

<br> <br> <br> <br><br><br> 
    <!--tabla 3 -->

    <table >
        <div class="container">
            <h3 class="page__heading">Antrecedentes: Gineco/Obstétricos</h3> <p></p> 
        </div>
        <tbody >
            <tr>
                <th scope="row" ">Fecha ultima regla</th>
                <td width="300" height="10">{{$fcprenatalpostpartos->FechaUltimaRegla}}</td>
            </tr>
            <tr>
                <th scope="row" ">Número de gestas</th>
                <td>{{$fcprenatalpostpartos->NoGestas}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de partos</th>
                <td>{{$fcprenatalpostpartos->Partos}}</td>
            </tr>    

            <tr>
                <th scope="row" ">Abortos</th>
                <td>{{$fcprenatalpostpartos->Aborto}}</td>
            </tr>    

            <tr>
                <th scope="row" ">Aborto consecutivo</th>
                <td>{{$fcprenatalpostpartos->AbortoConsecutivo}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de LIU</th>
                <td>{{$fcprenatalpostpartos->NoLIU}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de nacidos vivos</th>
                <td>{{$fcprenatalpostpartos->NacidosVivos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de nacidos muertos</th>
                <td>{{$fcprenatalpostpartos->NacidosMuertos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de hijos vivos</th>
                <td>{{$fcprenatalpostpartos->HijosVivos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de hijos muertos</th>
                <td>{{$fcprenatalpostpartos->HijosMuertos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de No. cesareas</th>
                <td>{{$fcprenatalpostpartos->NoCesareas}}</td>
            </tr>

            <tr>
                <th scope="row" ">Embarazo multiple</th>
                <td>{{$fcprenatalpostpartos->EmbarazoMultiples}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fecha de ultimo parto</th>
                <td>{{$fcprenatalpostpartos->FechaUltimoParto}}</td>
            </tr>

            <tr>
                <th scope="row" ">Número de nacidos antes de 8 meses</th>
                <td>{{$fcprenatalpostpartos->NacidosAntesOchoMeses}}</td>
            </tr>

            <tr>
                <th scope="row" ">Pre eclampsia</th>
                <td>{{$fcprenatalpostpartos->PreEclampsia}}</td>
            </tr>

            <tr>
                <th scope="row" ">Último RN Peso (-) 5 lb y media</th>
                <td>{{$fcprenatalpostpartos->UltimoRNPesoCincolb}}</td>
            </tr>

            <tr>
                <th scope="row" ">Último RN Peso (+) 7 lb 12 onz</th>
                <td>{{$fcprenatalpostpartos->UltimoRNPesoSietelb}}</td>
            </tr>

            <tr>
                <th scope="row" ">Detección de cancer de cervix</th>
                <td>{{$fcprenatalpostpartos->DeteccionCancerCervix}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fecha de deteccion de cancer</th>
                <td>{{$fcprenatalpostpartos->FechaDeteccionCancer}}</td>
            </tr>

            <tr>
                <th scope="row" ">Resultado normal</th>
                <td>{{$fcprenatalpostpartos->ResultadoNormal}}</td>
            </tr>

            <tr>
                <th scope="row" ">Método de planificación familiar</th>
                <td>{{$fcprenatalpostpartos->MetodoPlanificacionFamiliar}}</td>
            </tr>

            <tr>
                <th scope="row" ">Cuál fue el método que utilizo</th>
                <td>{{$fcprenatalpostpartos->CualMetodoPlanificacionF}}</td>
            </tr>
        </tbody>
    </table>

    <br> <br> <br> <br><br><br> <br><br><br><br>
    <!--tabla 4 -->
    <table >
        <div class="container">
            <h3 class="page__heading">Antrecedentes: Médicos</h3> <p></p> 
        </div>
        <tbody >
            <tr>
                <th scope="row" ">Asma Bronquial</th>
                <td width="300" height="10">{{$fcprenatalpostpartos->AsmaBronquial}}</td>
            </tr>
            <tr>
                <th scope="row" ">Hipertensión Arterial</th>
                <td>{{$fcprenatalpostpartos->HipertensionArterial}}</td>
            </tr>

            <tr>
                <th scope="row" ">Cáncer</th>
                <td>{{$fcprenatalpostpartos->Cancer}}</td>
            </tr>    

            <tr>
                <th scope="row" ">ITS</th>
                <td>{{$fcprenatalpostpartos->ITS}}</td>
            </tr>    

            <tr>
                <th scope="row" ">Chagas</th>
                <td>{{$fcprenatalpostpartos->Chagas}}</td>
            </tr>

            <tr>
                <th scope="row" ">Toma Medicamentos</th>
                <td>{{$fcprenatalpostpartos->TomaMedicamentos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Trastorno PsicoSocial</th>
                <td>{{$fcprenatalpostpartos->TrastornoPiscoSocial}}</td>
            </tr>

            <tr>
                <th scope="row" ">Violencia basada en género</th>
                <td>{{$fcprenatalpostpartos->ViolenciaGenero}}</td>
            </tr>

            <tr>
                <th scope="row" ">Diabetes</th>
                <td>{{$fcprenatalpostpartos->Diabetes}}</td>
            </tr>

            <tr>
                <th scope="row" ">Cardiopatia</th>
                <td>{{$fcprenatalpostpartos->Cardiopatia}}</td>
            </tr>

            <tr>
                <th scope="row" ">Tuberculosis</th>
                <td>{{$fcprenatalpostpartos->Tuberculosis}}</td>
            </tr>

            <tr>
                <th scope="row" ">Neuropatia</th>
                <td>{{$fcprenatalpostpartos->Neuropatia}}</td>
            </tr>

            <tr>
                <th scope="row" ">Infecciones Urinarias</th>
                <td>{{$fcprenatalpostpartos->InfeccionesUrinarias}}</td>
            </tr>

            <tr>
                <th scope="row" ">Violencia InrtraFamiliar</th>
                <td>{{$fcprenatalpostpartos->ViolenciaInrtraFamiliar}}</td>
            </tr>

            <tr>
                <th scope="row" ">Tipo de Sangre</th>
                <td>{{$fcprenatalpostpartos->TipoSangre}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fuma</th>
                <td>{{$fcprenatalpostpartos->Fuma}}</td>
            </tr>

            <tr>
                <th scope="row" ">Ingiere bebidas alcohólicas</th>
                <td>{{$fcprenatalpostpartos->BebidasAlcoholicas}}</td>
            </tr>

            <tr>
                <th scope="row" ">Consumo de drogas</th>
                <td>{{$fcprenatalpostpartos->ConsumoDrogas}}</td>
            </tr>

            <tr>
                <th scope="row" ">Antecedentes de vacuna Td</th>
                <td>{{$fcprenatalpostpartos->AntecedentesVacunas}}</td>
            </tr>

            <tr>
                <th scope="row" ">Dosis de Vacuna</th>
                <td>{{$fcprenatalpostpartos->DosisVacuna}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fecha de Ultima Dosis</th>
                <td>{{$fcprenatalpostpartos->FechaUltimaDosis}}</td>
            </tr>

            <tr>
                <th scope="row" ">SR</th>
                <td>{{$fcprenatalpostpartos->SR}}</td>
            </tr>

            <tr>
                <th scope="row" ">Quirurgicos</th>
                <td>{{$fcprenatalpostpartos->Quirurgicos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Otros Antecedentes</th>
                <td>{{$fcprenatalpostpartos->OtrosAntecedentes}}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>