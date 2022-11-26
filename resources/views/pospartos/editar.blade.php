@extends('layouts.app')
@section('title')
Editar datos del expediente No. {{$fcevaluacionposparto->datospersonalespacientes->Numerodireccion}}
@endsection

@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">EDITAR FICHA</h3>
        </div>
        <div class="section-body">
        <div class="row row-responsive">
                <div class="col-lg-12 col-responsive"  onkeypress="return pulsar(event)">
                    {{-- Validacion para ingreso de campos --}}
                            @if($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>¡Revise los campos!</strong>
                                @foreach ($errors->all() as $error)
                                    <span classs="badge badge-danger">{{$error}}</span>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                    {!! Form::model($fcevaluacionposparto, ['method' => 'PATCH', 'route'=> ['pospartos.update', $fcevaluacionposparto->idFCEvaluacionPosparto ]]) !!}
                    
                        @include('pospartos.editar.datospaciente')

                        @include('pospartos.editar.signossintomas')

                        @include('pospartos.editar.refirio')

                        @include('pospartos.editar.primer')

                        @include('pospartos.editar.suplementacion')

                        <div class="d-none">	
                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="" value="Usuario_id">Encargado de llenado</label>
                                    <select id="Usuario_id" class="form-control" name="Usuario_id" maxlength="35">
                                        <option value="{{\Illuminate\Support\Facades\Auth::user()->id}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="d-none">
                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="" value="Estado">Estado</label>
                                    <input type="text" name="Estado" value="Si">
                                </div>
                            </div>
                        </div>


                    
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-actualizar">Actualizar</button>
                            <a href="{{ route('pospartos.index') }}" class="btn btn-danger mr-3">Volver</a>
                        </div>
                        @include('modal.actualizar')
                    {!! Form::close() !!}


                </div>
            </div>
        </div>

        
    </section>
    
@endsection