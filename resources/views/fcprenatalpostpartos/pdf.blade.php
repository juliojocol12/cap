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
        <h3>Ficha clínica prenatal</h3>
        <h4>Datos de la paciente: {{$fcprenatalpostpartos->NombresPaciente}} {{$fcprenatalpostpartos->ApellidosPaciente}}</h4>
    </center>

    <div id="mostrarFecha"><h5>Fecha de emisión: {{ date('d-m-Y') }}</h5></div>
    
     <!--Tabla 1-->
    <table >
        <div class="container">
            <h4 class="page__heading">Datos generales</h4> <p></p>
        </div> 
        <tbody >
            <tr>
                <th scope="row" align="left">Número de expediente</th>
                <td width="350" height="10">{{$fcprenatalpostpartos->Numerodireccion}}</td>
            </tr>
            <tr>
                <th scope="row" align="left">Fecha</th>
                <td>{{$fcprenatalpostpartos->Fecha}}</td>
            </tr>

            <tr>
                <th scope="row" align="left">Establecimiento salud</th>
                <td>{{$fcprenatalpostpartos->establecimientosaludos->Nombre}}</td>
            </tr>    

            <tr>
                <th scope="row" align="left">Datos de paciente</th>
                <td>{{$fcprenatalpostpartos->NombresPaciente}} {{$fcprenatalpostpartos->ApellidosPaciente}}</td>
            </tr>    

            <tr>
                <th scope="row" align="left">Fecha de nacimiento</th>
                <td data-order="DD/MM/YYYY">{{$fcprenatalpostpartos->Fecha}}</td>
            </tr>

            <tr>
                <th scope="row" align="left">DPI</th>
                <td>{{$fcprenatalpostpartos->CUI}}</td>
            </tr>

            <tr>
                <th scope="row" align="left">Dirección</th>
                <td>{{$fcprenatalpostpartos->Descripciondireccion}}</td>
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
            <h4 class="page__heading">Evaluación de signos y síntomas de peligro</h4> <p></p> 
        
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
                <th scope="row" ">Visión borrosa</th>
                <td>{{$fcprenatalpostpartos->VisionBorrosa}}</td>
            </tr>    

            <tr>
                <th scope="row" ">Convulsión</th>
                <td>{{$fcprenatalpostpartos->Convulsion}}</td>
            </tr>    

            <tr>
                <th scope="row" ">Dolor abdominal severo</th>
                <td>{{$fcprenatalpostpartos->DolorAbdominal}}</td>
            </tr>

            <tr>
                <th scope="row" ">Presión arterial alta</th>
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
                <th scope="row" ">Paciente referida</th>
                <td>{{$fcprenatalpostpartos->RegistrodeReferencia}}</td>
            </tr>

            <tr>
                <th scope="row" ">Motivo de consulta</th>
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
            <h4 class="page__heading">Antrecedentes: Gineco/Obstétricos</h4> <p></p> 
        </div>
        <tbody >
            <tr>
                <th scope="row" ">Fecha última regla</th>
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
                <th scope="row" ">Número de no. cesáreas</th>
                <td>{{$fcprenatalpostpartos->NoCesareas}}</td>
            </tr>

            <tr>
                <th scope="row" ">Embarazo múltiple</th>
                <td>{{$fcprenatalpostpartos->EmbarazoMultiples}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fecha de último parto</th>
                <td>{{$fcprenatalpostpartos->FechaUltimoParto}}</td>
            </tr>

            <tr>
                <th scope="row" ">No. de nacidos antes de 8 meses</th>
                <td>{{$fcprenatalpostpartos->NacidosAntesOchoMeses}}</td>
            </tr>

            <tr>
                <th scope="row" ">Preeclampsia</th>
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
                <th scope="row" ">Fecha de detección de cáncer</th>
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
                <th scope="row" ">¿Cuál fue el método que utilizó?</th>
                <td>{{$fcprenatalpostpartos->CualMetodoPlanificacionF}}</td>
            </tr>
        </tbody>
    </table>

    <br> <br> <br> <br><br><br> <br><br><br><br>
    <!--tabla 4 -->
    <table >
        <div class="container">
            <h4 class="page__heading">Antrecedentes: Médicos</h4> <p></p> 
        </div>
        <tbody >
            <tr>
                <th scope="row" ">Asma bronquial</th>
                <td width="300" height="10">{{$fcprenatalpostpartos->AsmaBronquial}}</td>
            </tr>
            <tr>
                <th scope="row" ">Hipertensión arterial</th>
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
                <th scope="row" ">Toma medicamentos</th>
                <td>{{$fcprenatalpostpartos->TomaMedicamentos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Trastorno psicosocial</th>
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
                <th scope="row" ">Cardiopatía</th>
                <td>{{$fcprenatalpostpartos->Cardiopatia}}</td>
            </tr>

            <tr>
                <th scope="row" ">Tuberculosis</th>
                <td>{{$fcprenatalpostpartos->Tuberculosis}}</td>
            </tr>

            <tr>
                <th scope="row" ">Neuropatía</th>
                <td>{{$fcprenatalpostpartos->Neuropatia}}</td>
            </tr>

            <tr>
                <th scope="row" ">Infecciones urinarias</th>
                <td>{{$fcprenatalpostpartos->InfeccionesUrinarias}}</td>
            </tr>

            <tr>
                <th scope="row" ">Violencia inrtrafamiliar</th>
                <td>{{$fcprenatalpostpartos->ViolenciaInrtraFamiliar}}</td>
            </tr>

            <tr>
                <th scope="row" ">Tipo sanguíneo</th>
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
                <th scope="row" ">Vacuna TdAp</th>
                <td>{{$fcprenatalpostpartos->VacunaTdAp}}</td>
            </tr>

            <tr>
                <th scope="row" ">Dosis de Vacuna</th>
                <td>{{$fcprenatalpostpartos->DosisVacunaTdAp}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fecha de última dosis TdAp</th>
                <td>{{$fcprenatalpostpartos->FechaVacunaTdAp}}</td>
            </tr>

            <tr>
                <th scope="row" ">Vacuna Td</th>
                <td>{{$fcprenatalpostpartos->VacunaTd}}</td>
            </tr>

            <tr>
                <th scope="row" ">Dosis de vacuna</th>
                <td>{{$fcprenatalpostpartos->DosisVacunaTd}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fecha de última dosis Td</th>
                <td>{{$fcprenatalpostpartos->FechaVacunaTd}}</td>
            </tr>

            <tr>
                <th scope="row" ">Vacuna influenza</th>
                <td>{{$fcprenatalpostpartos->VacunaInfluenza}}</td>
            </tr>

            <tr>
                <th scope="row" ">Dosis de vacuna</th>
                <td>{{$fcprenatalpostpartos->DosisVacunaInfluenza}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fecha de última dosis influenza</th>
                <td>{{$fcprenatalpostpartos->FechaVacunaInfluenza}}</td>
            </tr>
            
            <tr>
                <th scope="row" ">Vacuna COVID-19</th>
                <td>{{$fcprenatalpostpartos->VacunaInfluenza}}</td>
            </tr>

            <tr>
                <th scope="row" ">Dosis de Vacuna</th>
                <td>{{$fcprenatalpostpartos->DosisVacunaInfluenza}}</td>
            </tr>

            <tr>
                <th scope="row" ">Fecha de última dosis COVID-19</th>
                <td>{{$fcprenatalpostpartos->FechaVacunaInfluenza}}</td>
            </tr>

            <tr>
                <th scope="row" ">SR</th>
                <td>{{$fcprenatalpostpartos->SR}}</td>
            </tr>

            <tr>
                <th scope="row" ">Quirúrgicos</th>
                <td>{{$fcprenatalpostpartos->Quirurgicos}}</td>
            </tr>

            <tr>
                <th scope="row" ">Otros antecedentes</th>
                <td>{{$fcprenatalpostpartos->OtrosAntecedentes}}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>