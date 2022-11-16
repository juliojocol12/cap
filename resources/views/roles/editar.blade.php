@extends('layouts.app')
@section('title')
    Editar rol de {{$role->name}}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar datos de rol de {{$role->name}}</h3>
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
                            @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            @endif

                            {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Nombre del Rol:</label>      
                                        {!! Form::text('name', null, array('class' => 'form-control','maxlength'=>'45')) !!}
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
                                                        {{ Form::checkbox('permission[]', $valuesuno->id, in_array($valuesuno->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisodos as $valuesdos)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdos->id, in_array($valuesdos->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisotres as $valuestres)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestres->id, in_array($valuestres->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocuatro as $valuescuatro)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatro->id, in_array($valuescuatro->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocinco as $valuescinco)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescinco->id, in_array($valuescinco->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach
                                                </tr>

                                                {{-- Permisos Roles --}}
                                                <tr>                                                        
                                                    <td>Roles</td>
                                                    @foreach($permisoseis as $valuesseis)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesseis->id, in_array($valuesseis->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisosiete as $valuessiete)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessiete->id, in_array($valuessiete->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisoocho as $valuesocho)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesocho->id, in_array($valuesocho->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisonnueve as $valuesnnueve)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesnnueve->id, in_array($valuesnnueve->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisodies as $valuesdies)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdies->id, in_array($valuesdies->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach
                                                </tr>

                                                {{-- Permisos Infantes --}}
                                                <tr>                                                        
                                                    <td>Infantes</td>
                                                    @foreach($permisoonce as $valuesonce)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesonce->id, in_array($valuesonce->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisodoce as $valuesdoce)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdoce->id, in_array($valuesdoce->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisotresce as $valuestresce)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestresce->id, in_array($valuestresce->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocatorce as $valuescatorce)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescatorce->id, in_array($valuescatorce->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisoquince as $valuesquince)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesquince->id, in_array($valuesquince->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach
                                                </tr>

                                                {{-- Permisos Personal --}}
                                                <tr>                                                        
                                                    <td>Personal</td>
                                                    @foreach($permisodiesies as $valuesdiesies)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdiesies->id, in_array($valuesdiesies->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisodiesisiete as $valuesdiesisiete)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdiesisiete->id, in_array($valuesdiesisiete->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisodiessiocho as $valuesdiessiocho)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdiessiocho->id, in_array($valuesdiessiocho->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisodiesinueve as $valuesdiesinueve)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesdiesinueve->id, in_array($valuesdiesinueve->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisoveinte as $valuesveinte)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveinte->id, in_array($valuesveinte->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach
                                                </tr>

                                                {{-- Permisos Pueblo --}}
                                                <tr>                                                        
                                                    <td>Pueblo</td>
                                                    @foreach($permisoveintiuno as $valuesveintiuno)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintiuno->id, in_array($valuesveintiuno->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisoveintidos as $valuesveintidos)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintidos->id, in_array($valuesveintidos->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisoveintitres as $valuesveintitres)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintitres->id, in_array($valuesveintitres->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisoveinticuatro as $valuesveinticuatro)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveinticuatro->id, in_array($valuesveinticuatro->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisoveinticinco as $valuesveinticinco)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveinticinco->id, in_array($valuesveinticinco->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach
                                                </tr>

                                                {{-- Permisos Establecimiento --}}
                                                <tr>                                                        
                                                    <td>Establecimiento</td>
                                                    @foreach($permisoveintiseis as $valuesveintiseis)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintiseis->id, in_array($valuesveintiseis->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisoveintisiete as $valuesveintisiete)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintisiete->id, in_array($valuesveintisiete->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisoveintiocho as $valuesveintiocho)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintiocho->id, in_array($valuesveintiocho->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisveintionueve as $valuesveintionueve)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesveintionueve->id, in_array($valuesveintionueve->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisotreinta as $valuestreinta)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreinta->id, in_array($valuestreinta->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach
                                                </tr>

                                                {{-- Permisos Pacientes --}}
                                                <tr>                                                        
                                                    <td>Pacientes</td>
                                                    @foreach($permisotreintauno as $valuestreintauno)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintauno->id, in_array($valuestreintauno->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisotreintados as $valuestreintados)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintados->id, in_array($valuestreintados->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisotreintatres as $valuestreintatres)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintatres->id, in_array($valuestreintatres->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisotreintacuatro as $valuestreintacuatro)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintacuatro->id, in_array($valuestreintacuatro->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisotreintacinco as $valuestreintacinco)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintacinco->id, in_array($valuestreintacinco->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach
                                                </tr>


                                                {{-- Permisos Familiares --}}
                                                <tr>                                                        
                                                    <td>Familiares</td>
                                                    @foreach($permisotreintaseis as $valuestreintaseis)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintaseis->id, in_array($valuestreintaseis->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisotreintasiete as $valuestreintasiete)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintasiete->id, in_array($valuestreintasiete->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisotreintaocho as $valuestreintaocho)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintaocho->id, in_array($valuestreintaocho->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisotreintanueve as $valuestreintanueve)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuestreintanueve->id, in_array($valuestreintanueve->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocuatenta as $valuescuatenta)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatenta->id, in_array($valuescuatenta->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach
                                                </tr>

                                                {{-- Permisos Prenalta --}}
                                                <tr>                                                        
                                                    <td>Ficha Prenatal</td>
                                                    @foreach($permisocuatentauno as $valuescuatentauno)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentauno->id, in_array($valuescuatentauno->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocuatentados as $valuescuatentados)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentados->id, in_array($valuescuatentados->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocuatentatres as $valuescuatentatres)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentatres->id, in_array($valuescuatentatres->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocuatentacuatro as $valuescuatentacuatro)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentacuatro->id, in_array($valuescuatentacuatro->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocuatentacinco as $valuescuatentacinco)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentacinco->id, in_array($valuescuatentacinco->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach
                                                </tr>

                                                {{-- Permisos Control prenatal --}}
                                                <tr>                                                        
                                                    <td>Control Prenatal</td>
                                                    @foreach($permisocuatentaseis as $valuescuatentaseis)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentaseis->id, in_array($valuescuatentaseis->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocuatentasiete as $valuescuatentasiete)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentasiete->id, in_array($valuescuatentasiete->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocuatentaocho as $valuescuatentaocho)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentaocho->id, in_array($valuescuatentaocho->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocuatentanueve as $valuescuatentanueve)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescuatentanueve->id, in_array($valuescuatentanueve->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocincuenta as $valuescincuenta)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuenta->id, in_array($valuescincuenta->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach
                                                </tr>

                                                {{-- Permisos posparto --}}
                                                <tr>                                                        
                                                    <td>Ficha posparto</td>
                                                    @foreach($permisocincuentauno as $valuescincuentauno)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentauno->id, in_array($valuescincuentauno->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocincuentados as $valuescincuentados)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentados->id, in_array($valuescincuentados->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocincuentatres as $valuescincuentatres)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentatres->id, in_array($valuescincuentatres->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocincuentacuatro as $valuescincuentacuatro)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentacuatro->id, in_array($valuescincuentacuatro->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocincuentacinco as $valuescincuentacinco)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentacinco->id, in_array($valuescincuentacinco->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach
                                                </tr>

                                                {{-- Permisos control posparto --}}
                                                <tr>                                                        
                                                    <td>Control posparto</td>
                                                    @foreach($permisocincuentaseis as $valuescincuentaseis)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentaseis->id, in_array($valuescincuentaseis->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocincuentasiete as $valuescincuentasiete)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentasiete->id, in_array($valuescincuentasiete->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocincuentaocho as $valuescincuentaocho)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentaocho->id, in_array($valuescincuentaocho->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisocincuentanueve as $valuescincuentanueve)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuescincuentanueve->id, in_array($valuescincuentanueve->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisosesenta as $valuessesenta)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesenta->id, in_array($valuessesenta->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach
                                                </tr>

                                                {{-- Permisos agenda --}}
                                                <tr>                                                        
                                                    <td>Agenda</td>
                                                    @foreach($permisosesentauno as $valuessesentauno)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentauno->id, in_array($valuessesentauno->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisosesentados as $valuessesentados)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentados->id, in_array($valuessesentados->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisosesentatres as $valuessesentatres)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentatres->id, in_array($valuessesentatres->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisosesentacuatro as $valuessesentacuatro)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentacuatro->id, in_array($valuessesentacuatro->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisosesentacinco as $valuessesentacinco)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentacinco->id, in_array($valuessesentacinco->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach
                                                </tr>

                                                {{-- Permisos vacunas --}}
                                                <tr>                                                        
                                                    <td>Vacuna</td>
                                                    @foreach($permisosesentaseis as $valuessesentaseis)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentaseis->id, in_array($valuessesentaseis->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                        
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisosesentasiete as $valuessesentasiete)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentasiete->id, in_array($valuessesentasiete->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisosesentaocho as $valuessesentaocho)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentaocho->id, in_array($valuessesentaocho->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisosesentanueve as $valuessesentanueve)
                                                    <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessesentanueve->id, in_array($valuessesentanueve->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    </td> 
                                                    @endforeach

                                                    @foreach($permisosetenta as $valuessetenta)
                                                        <td align="center">      
                                                        {{ Form::checkbox('permission[]', $valuessetenta->id, in_array($valuessetenta->id, $rolePermissions) ? true : false, array('class' => 'name')) }}                                         
                                                        </td> 
                                                    @endforeach
                                                </tr>

                                                <tr>                                                        
                                                        <td>Vacunación infante</td>
                                                        @foreach($permisosetentauno as $valuessetentauno)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentauno->id, in_array($valuessetentauno->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentados as $valuessetentados)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentados->id, in_array($valuessetentados->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentatres as $valuessetentatres)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentatres->id, in_array($valuessetentatres->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentacuatro as $valuessetentacuatro)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentacuatro->id, in_array($valuessetentacuatro->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentacinco as $valuessetentacinco)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentacinco->id, in_array($valuessetentacinco->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>

                                                    <tr>                                                        
                                                        <td>Abortos</td>
                                                        @foreach($permisosetentaseis as $valuessetentaseis)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentaseis->id, in_array($valuessetentaseis->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentasiete as $valuessetentasiete)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentasiete->id, in_array($valuessetentasiete->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentaocho as $valuessetentaocho)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentaocho->id, in_array($valuessetentaocho->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisosetentanueve as $valuessetentanueve)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuessetentanueve->id, in_array($valuessetentanueve->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach

                                                        @foreach($permisoochenta as $valuesochenta)
                                                        <td align="center">
                                                        {{ Form::checkbox('permission[]', $valuesochenta->id, in_array($valuesochenta->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                        </td> 
                                                        @endforeach
                                                    </tr>
                                        </table>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-actualizar">Actualizar</button>
                                        <a href="{{ route('roles.index') }}" class="btn btn-danger mr-3">Volver</a>
                                    </div>
                                    @include('modal.actualizar')
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection