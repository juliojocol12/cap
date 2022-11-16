@extends('layouts.app')
@section('title')
    Crear roles
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <a href="{{ route('roles.index') }}" class="btn btn-danger mr-3">Volver</a>
                    </div>
                    <div class="card">
                    
                        <div class="card-body" onkeypress="return pulsar(event)">
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
                            
                            
                            {!! Form::open(array('route'=>'roles.store', 'method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombre del Rol</label>
                                            {!! Form::text('name', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Ingrese el nombre para el rol','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                    <div class="col-xs-12 col-sm-12 col-md-10" >
                                        <div class="form-group" >
                                            <label for="name">Permisos de rol</label>
                                            <br/>


                                            <table class="table  table-striped mt-2 table-responsive" >
                                                {{-- indice tabla --}}
                                                <thead style="background-color: #6777ef;">
                                                    <th class="text-center" style="color:#fff;">Nombre</th>
                                                    <th class="text-center" style="color:#fff;">Inicio </th>
                                                    <th class="text-center" style="color:#fff;">Ver</th>
                                                    <th class="text-center" style="color:#fff;">Crear</th>
                                                    <th class="text-center" style="color:#fff;">Editar</th>
                                                    <th class="text-center" style="color:#fff;">Eliminar</th>
                                                </thead>
                                                <tbody>
                                                    {{-- Control total --}}
                                                    <tr>                                                        
                                                        <td>Control total</td>
                                                        <td align="center" onclick="marcar('isApproved')">
                                                        <input type="checkbox">
                                                        </td> 
                                                        
                                                        <td align="center">
                                                        <input onclick="marcar('isDeleted')" type="checkbox">
                                                        </td>
                                                        
                                                        <td align="center">
                                                        <input type="checkbox">
                                                        </td>
                                                        
                                                        <td align="center">
                                                        <input type="checkbox">
                                                        </td>
                                                        
                                                        <td align="center">
                                                        <input type="checkbox">
                                                        </td>
                                                    </tr>

                                                    {{-- Permisos usuarios --}}
                                                    <tr>                                                        
                                                        <td>Usuarios</td>
                                                        @foreach($permisouno as $valuesuno)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesuno->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisodos as $valuesdos)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdos->id, false, array('class' => 'name' )) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisotres as $valuestres)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestres->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocuatro as $valuescuatro)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatro->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocinco as $valuescinco)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescinco->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    {{-- Permisos Roles --}}
                                                    <tr>                                                        
                                                        <td>Roles</td>
                                                        @foreach($permisoseis as $valuesseis)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesseis->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosiete as $valuessiete)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessiete->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisoocho as $valuesocho)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesocho->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisonnueve as $valuesnnueve)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesnnueve->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisodies as $valuesdies)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdies->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    {{-- Permisos Infantes --}}
                                                    <tr>                                                        
                                                        <td>Infantes</td>
                                                        @foreach($permisoonce as $valuesonce)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesonce->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisodoce as $valuesdoce)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdoce->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisotresce as $valuestresce)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestresce->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocatorce as $valuescatorce)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescatorce->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisoquince as $valuesquince)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesquince->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    {{-- Permisos Personal --}}
                                                    <tr>                                                        
                                                        <td>Personal</td>
                                                        @foreach($permisodiesies as $valuesdiesies)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdiesies->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisodiesisiete as $valuesdiesisiete)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdiesisiete->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisodiessiocho as $valuesdiessiocho)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdiessiocho->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisodiesinueve as $valuesdiesinueve)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdiesinueve->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisoveinte as $valuesveinte)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveinte->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    {{-- Permisos Pueblo --}}
                                                    <tr>                                                        
                                                        <td>Pueblo</td>
                                                        @foreach($permisoveintiuno as $valuesveintiuno)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintiuno->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisoveintidos as $valuesveintidos)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintidos->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisoveintitres as $valuesveintitres)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintitres->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisoveinticuatro as $valuesveinticuatro)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveinticuatro->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisoveinticinco as $valuesveinticinco)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveinticinco->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    {{-- Permisos Establecimiento --}}
                                                    <tr>                                                        
                                                        <td>Establecimiento</td>
                                                        @foreach($permisoveintiseis as $valuesveintiseis)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintiseis->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisoveintisiete as $valuesveintisiete)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintisiete->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisoveintiocho as $valuesveintiocho)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintiocho->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisveintionueve as $valuesveintionueve)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintionueve->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisotreinta as $valuestreinta)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreinta->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    {{-- Permisos Pacientes --}}
                                                    <tr>                                                        
                                                        <td>Pacientes</td>
                                                        @foreach($permisotreintauno as $valuestreintauno)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintauno->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisotreintados as $valuestreintados)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintados->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisotreintatres as $valuestreintatres)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintatres->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisotreintacuatro as $valuestreintacuatro)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintacuatro->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisotreintacinco as $valuestreintacinco)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintacinco->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>


                                                    {{-- Permisos Familiares --}}
                                                    <tr>                                                        
                                                        <td>Familiares</td>
                                                        @foreach($permisotreintaseis as $valuestreintaseis)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintaseis->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisotreintasiete as $valuestreintasiete)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintasiete->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisotreintaocho as $valuestreintaocho)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintaocho->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisotreintanueve as $valuestreintanueve)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintanueve->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocuatenta as $valuescuatenta)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatenta->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    {{-- Permisos Prenalta --}}
                                                    <tr>                                                        
                                                        <td>Ficha Prenatal</td>
                                                        @foreach($permisocuatentauno as $valuescuatentauno)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentauno->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocuatentados as $valuescuatentados)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentados->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocuatentatres as $valuescuatentatres)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentatres->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocuatentacuatro as $valuescuatentacuatro)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentacuatro->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocuatentacinco as $valuescuatentacinco)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentacinco->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    {{-- Permisos Control prenatal --}}
                                                    <tr>                                                        
                                                        <td>Control Prenatal</td>
                                                        @foreach($permisocuatentaseis as $valuescuatentaseis)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentaseis->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocuatentasiete as $valuescuatentasiete)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentasiete->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocuatentaocho as $valuescuatentaocho)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentaocho->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocuatentanueve as $valuescuatentanueve)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentanueve->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocincuenta as $valuescincuenta)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuenta->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    {{-- Permisos posparto --}}
                                                    <tr>                                                        
                                                        <td>Ficha posparto</td>
                                                        @foreach($permisocincuentauno as $valuescincuentauno)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentauno->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocincuentados as $valuescincuentados)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentados->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocincuentatres as $valuescincuentatres)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentatres->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocincuentacuatro as $valuescincuentacuatro)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentacuatro->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocincuentacinco as $valuescincuentacinco)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentacinco->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    {{-- Permisos control posparto --}}
                                                    <tr>                                                        
                                                        <td>Control posparto</td>
                                                        @foreach($permisocincuentaseis as $valuescincuentaseis)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentaseis->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocincuentasiete as $valuescincuentasiete)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentasiete->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocincuentaocho as $valuescincuentaocho)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentaocho->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisocincuentanueve as $valuescincuentanueve)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentanueve->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosesenta as $valuessesenta)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesenta->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    {{-- Permisos agenda --}}
                                                    <tr>                                                        
                                                        <td>Agenda</td>
                                                        @foreach($permisosesentauno as $valuessesentauno)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentauno->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosesentados as $valuessesentados)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentados->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosesentatres as $valuessesentatres)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentatres->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosesentacuatro as $valuessesentacuatro)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentacuatro->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosesentacinco as $valuessesentacinco)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentacinco->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    {{-- Permisos vacunas --}}
                                                    <tr>                                                        
                                                        <td>Vacuna</td>
                                                        @foreach($permisosesentaseis as $valuessesentaseis)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentaseis->id, false, array('class' => 'name')) }}
                                                        
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosesentasiete as $valuessesentasiete)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentasiete->id, false, array('class' => 'name')) }}
                                                        
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosesentaocho as $valuessesentaocho)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentaocho->id, false, array('class' => 'name')) }}
                                                        
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosesentanueve as $valuessesentanueve)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentanueve->id, false, array('class' => 'name')) }}
                                                        
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetenta as $valuessetenta)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetenta->id, false, array('class' => 'name')) }}                                                        
                                                        </td> 
                                                        @endforeach
                                                        
                                                    </tr>

                                                    <tr>                                                        
                                                        <td>Vacunación infante</td>
                                                        @foreach($permisosetentauno as $valuessetentauno)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentauno->id, false, array('class' => 'name')) }}
                                                        
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentados as $valuessetentados)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentados->id, false, array('class' => 'name')) }}
                                                        
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentatres as $valuessetentatres)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentatres->id, false, array('class' => 'name')) }}
                                                        
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentacuatro as $valuessetentacuatro)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentacuatro->id, false, array('class' => 'name')) }}
                                                        
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentacinco as $valuessetentacinco)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentacinco->id, false, array('class' => 'name')) }}
                                                        
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    <tr>                                                        
                                                        <td>Abortos</td>
                                                        @foreach($permisosetentaseis as $valuessetentaseis)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentaseis->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentasiete as $valuessetentasiete)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentasiete->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentaocho as $valuessetentaocho)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentaocho->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentanueve as $valuessetentanueve)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentanueve->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisoochenta as $valuesochenta)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesochenta->id, false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>
                                            </table>

                                        </div>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-crear">Guardar</button>
                                        <a href="{{ route('roles.index') }}" class="btn btn-danger mr-3">Volver</a>
                                    </div> 
                                </div>
                                @include('modal.guardar')
                                {!! Form::close() !!}                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection