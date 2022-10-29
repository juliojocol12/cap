@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ficha clinica PRENATAL Y/O POSTPARTO</h3>
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

                            <table class="table  table-striped table-bordered mt-5">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombres</th>
                                    <th style="color:#fff;">Apellidos</th>
                                    <th style="color:#fff;">Género</th>
                                    <th style="color:#fff;">Fecha de Nacimiento</th>
                                    <th style="color:#fff;">Hora de Naciemiento</th>
                                    <th style="color:#fff;">Peso en Libras</th>
                                    <th style="color:#fff;">Peso en Onzas</th>
                                    <th style="color:#fff;">Altura</th>
                                    <th style="color:#fff;">Observaciones</th>
                                    <th style="color:#fff;">Fecha de Egreso</th>
                                    <th style="color:#fff;">Tipo Sanguineo</th>
                                    <th style="color:#fff;">Datos de la mamá</th>
                                    <th style="color:#fff;">Datos de familiares</th>

                                    <th style="color:#fff;">Acciones</th>
                                </thead>
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