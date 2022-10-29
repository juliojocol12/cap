@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">FICHA CLINICA PRENATAL Y/O POSPARTO</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-warning" href="{{ route('fcprenatalpostpartos.create') }}">Ingresar ficha</a>
                            @if(session('status'))
                                <div class="alert alert-success mt-4">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <table class="table  table-striped table-bordered mt-5 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    

                                    <th style="color:#fff;">Acciones</th>
                                    <th style="color:#fff;">No. Expediente</th>
                                    <th style="color:#fff;">Fecha</th>
                                    <th style="color:#fff;">Datos de paciente</th>
                                    <th style="color:#fff;">Establecimiento Salud</th>
                                    <th style="color:#fff;">Hemorragia Vaginal</th>
                                    <th style="color:#fff;">Dolor de Cabeza</th>
                                    <th style="color:#fff;">Visión Borrosa</th>
                                    <th style="color:#fff;">Convulsión</th>
                                    <th style="color:#fff;">Dolor Abdominal</th>
                                    <th style="color:#fff;">Presion Arterial</th>
                                    <th style="color:#fff;">Fiebre</th>
                                    <th style="color:#fff;">Presentaciones Fetales</th>
                                    <th style="color:#fff;">Registro de Referencia</th>
                                    <th style="color:#fff;">Motivo Consulta</th>
                                    <th style="color:#fff;">Historia de Enfermedad Actual</th>
                                    <th style="color:#fff;">Fecha de última Regla</th>
                                    <th style="color:#fff;">No. Gestas</th>
                                    <th style="color:#fff;">Partos</th>
                                    <th style="color:#fff;">Abortos</th>
                                    <th style="color:#fff;">Abortos Consecutivo</th>
                                    <th style="color:#fff;">No. LIU</th>
                                    <th style="color:#fff;">Nacidos Vivos</th>
                                    <th style="color:#fff;">Nacidos Muertos</th>
                                    <th style="color:#fff;">Hijos Vivos</th>
                                    <th style="color:#fff;">Hijos Muertos</th>
                                    <th style="color:#fff;">No. Cesareas</th>
                                    <th style="color:#fff;">Embarazos Múltiples</th>
                                    <th style="color:#fff;">Fecha de último Parto</th>
                                    <th style="color:#fff;">Nacidos antes de Oocho meses</th>
                                    <th style="color:#fff;">Pre Eclampsia</th>
                                    <th style="color:#fff;">Ultimo RN Peso Menor de Cinco Lb y media</th>
                                    <th style="color:#fff;">Ultimo RN Peso Mayor de Siete Lb</th>
                                    <th style="color:#fff;">Detección Cancer Cervix</th>
                                    <th style="color:#fff;">Fecha de Detección Cancer</th>
                                    <th style="color:#fff;">Resultado Normal</th>
                                    <th style="color:#fff;">Metodo de Planificacion Familiar</th>
                                    <th style="color:#fff;">Cual fue el Metodo de PlanificacionF</th>
                                    <th style="color:#fff;">Asma Bronquial</th>
                                    <th style="color:#fff;">Hipertension Arterial</th>
                                    <th style="color:#fff;">Cancer</th>
                                    <th style="color:#fff;">ITS</th>
                                    <th style="color:#fff;">Chagas</th>
                                    <th style="color:#fff;">Toma Medicamentos</th>
                                    <th style="color:#fff;">Trastorno PsicoSocial</th>
                                    <th style="color:#fff;">Violencia de Género</th>
                                    <th style="color:#fff;">Diabetes</th>
                                    <th style="color:#fff;">Cardiopatia</th>
                                    <th style="color:#fff;">Tuberculosis</th>
                                    <th style="color:#fff;">Neuropatia</th>
                                    <th style="color:#fff;">Infecciones Urinarias</th>
                                    <th style="color:#fff;">Violencia InrtraFamiliar</th>
                                    <th style="color:#fff;">Tipo de Sangre</th>
                                    <th style="color:#fff;">Quirurgicos</th>
                                    <th style="color:#fff;">Fuma</th>
                                    <th style="color:#fff;">Bebidas Alcoholicas</th>
                                    <th style="color:#fff;">Consumo de Drogas</th>
                                    <th style="color:#fff;">Antecedentes de Vacunas</th>
                                    <th style="color:#fff;">Dosis de Vacuna</th>
                                    <th style="color:#fff;">Fecha de Ultima Dosis</th>
                                    <th style="color:#fff;">SR</th>
                                    <th style="color:#fff;">OtrosAntecedentes</th>
                                </thead>

                                <tbody>
                                    @foreach($fcprenatalpostpartos as $fcprenatalpostparto)
                                        <tr>
                                            <td style="display: none;">{{ $fcprenatalpostparto->idFCPrenatalPostpartos }}</td>

                                            
                                            <td>
                                                <a class="btn btn-info" href="{{ route('fcprenatalpostpartos.edit', $fcprenatalpostparto->idFCPrenatalPostpartos) }}">Editar</a>
                                                
                                                <!-- Button trigger modal -->                                                
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-ficha">Eliminar</button>

                                            </td>

                                            <td>{{$fcprenatalpostparto->ExpedienteNo}}</td>
                                            <td>{{$fcprenatalpostparto->Fecha}}</td>

                                            
                                            <td>{{$fcprenatalpostparto->datospersonalespacientes->NombresPaciente}} {{$fcprenatalpostparto->datospersonalespacientes->ApellidosPaciente}}</td>

                                            
                                            <td>{{$fcprenatalpostparto->establecimientosaludos->Nombre}} </td>
                                            
                                            <td>{{$fcprenatalpostparto->HemorragiaVaginal}}</td>
                                            <td>{{$fcprenatalpostparto->DolordeCabeza}}</td>
                                            <td>{{$fcprenatalpostparto->VisionBorrosa}}</td>
                                            <td>{{$fcprenatalpostparto->Convulsion}}</td>
                                            <td>{{$fcprenatalpostparto->DolorAbdominal}}</td>
                                            <td>{{$fcprenatalpostparto->PresionArterial}}</td>
                                            <td>{{$fcprenatalpostparto->Fiebre}}</td>
                                            <td>{{$fcprenatalpostparto->PresentacionesFetales}}</td>
                                            <td>{{$fcprenatalpostparto->RegistrodeReferencia}}</td>
                                            <td>{{$fcprenatalpostparto->MotivoConsulta}}</td>
                                            <td>{{$fcprenatalpostparto->HistoriaEnfermedadActual}}</td>
                                            <td>{{$fcprenatalpostparto->FechaUltimaRegla}}</td>
                                            <td>{{$fcprenatalpostparto->NoGestas}}</td>
                                            <td>{{$fcprenatalpostparto->Partos}}</td>
                                            <td>{{$fcprenatalpostparto->Aborto}}</td>
                                            <td>{{$fcprenatalpostparto->AbortoConsecutivo}}</td>
                                            <td>{{$fcprenatalpostparto->NoLIU}}</td>
                                            <td>{{$fcprenatalpostparto->NacidosVivos}}</td>
                                            <td>{{$fcprenatalpostparto->NacidosMuertos}}</td>
                                            <td>{{$fcprenatalpostparto->HijosVivos}}</td>
                                            <td>{{$fcprenatalpostparto->HijosMuertos}}</td>
                                            <td>{{$fcprenatalpostparto->NoCesareas}}</td>
                                            <td>{{$fcprenatalpostparto->EmbarazoMultiples}}</td>
                                            <td>{{$fcprenatalpostparto->FechaUltimoParto}}</td>
                                            <td>{{$fcprenatalpostparto->NacidosAntesOchoMeses}}</td>
                                            <td>{{$fcprenatalpostparto->PreEclampsia}}</td>
                                            <td>{{$fcprenatalpostparto->UltimoRNPesoCincolb}}</td>
                                            <td>{{$fcprenatalpostparto->UltimoRNPesoSietelb}}</td>
                                            <td>{{$fcprenatalpostparto->DeteccionCancerCervix}}</td>
                                            <td>{{$fcprenatalpostparto->FechaDeteccionCancer}}</td>
                                            <td>{{$fcprenatalpostparto->ResultadoNormal}}</td>
                                            <td>{{$fcprenatalpostparto->MetodoPlanificacionFamiliar}}</td>
                                            <td>{{$fcprenatalpostparto->CualMetodoPlanificacionF}}</td>
                                            <td>{{$fcprenatalpostparto->AsmaBronquial}}</td>
                                            <td>{{$fcprenatalpostparto->HipertensionArterial}}</td>
                                            <td>{{$fcprenatalpostparto->Cancer}}</td>
                                            <td>{{$fcprenatalpostparto->ITS}}</td>
                                            <td>{{$fcprenatalpostparto->Chagas}}</td>
                                            <td>{{$fcprenatalpostparto->TomaMedicamentos}}</td>
                                            <td>{{$fcprenatalpostparto->TrastornoPiscoSocial}}</td>
                                            <td>{{$fcprenatalpostparto->ViolenciaGenero}}</td>
                                            <td>{{$fcprenatalpostparto->Diabetes}}</td>
                                            <td>{{$fcprenatalpostparto->Cardiopatia}}</td>
                                            <td>{{$fcprenatalpostparto->Tuberculosis}}</td>
                                            <td>{{$fcprenatalpostparto->Neuropatia}}</td>
                                            <td>{{$fcprenatalpostparto->InfeccionesUrinarias}}</td>
                                            <td>{{$fcprenatalpostparto->ViolenciaInrtraFamiliar}}</td>
                                            <td>{{$fcprenatalpostparto->TipoSangre}}</td>
                                            <td>{{$fcprenatalpostparto->Quirurgicos}}</td>
                                            <td>{{$fcprenatalpostparto->Fuma}}</td>
                                            <td>{{$fcprenatalpostparto->BebidasAlcoholicas}}</td>
                                            <td>{{$fcprenatalpostparto->ConsumoDrogas}}</td>
                                            <td>{{$fcprenatalpostparto->AntecedentesVacunas}}</td>
                                            <td>{{$fcprenatalpostparto->DosisVacuna}}</td>
                                            <td>{{$fcprenatalpostparto->FechaUltimaDosis}}</td>
                                            <td>{{$fcprenatalpostparto->SR}}</td>
                                            <td>{{$fcprenatalpostparto->OtrosAntecedentes}}</td>
              
                                        </tr>
                                        @include('fcprenatalpostpartos.delete')
                                    @endforeach
                                </tbody>
                            </table>
                            
                            <div class="pagination justify-content-end">
                                {!! $fcprenatalpostpartos->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection