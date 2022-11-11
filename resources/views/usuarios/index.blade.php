@extends('layouts.app')
@section('title')
    Usuarios
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if(session('status'))
                                    <div class="alert alert-success mt-4">
                                        {{ session('status') }}
                                    </div>
                            @endif
                          
                            @can('crear-usuario')
                            <a class="btn btn-warning" href="{{ route('usuarios.create') }}">Nuevo</a>
                            @endcan

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('usuarios.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese cualquier valor a buscar">
                                            </div>
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                                <a href="{{ route('usuarios.index') }}" class="btn btn-danger mr-3">Borrar busqueda</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    @can('editar-usuario')
                                    <th style="color:#fff;">Editar</th>
                                    @endcan
                                    @can('borrar-usuario')
                                    <th style="color:#fff;">Borrar</th>
                                    @endcan
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">E-mail</th>
                                    <th style="color:#fff;">Rol</th>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $usuario)
                                        <tr>
                                            <td style="display: none;">{{ $usuario->id }}</td>
                                            @can('editar-usuario')
                                                <td>
                                                <a class="btn btn-info" href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                                                </td>
                                            @endcan
                                            @can('borrar-usuario')
                                                <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$usuario->id}}">Eliminar</button>
                                                </td>
                                            @endcan
                                            <td>{{$usuario->name}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td>
                                                @if(!empty($usuario->getRoleNames()))
                                                    @foreach($usuario->getRoleNames() as $rolName)
                                                    <h5><span class="badge badge-dark">{{$rolName}}</span></h5>
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>
                                        @include('usuarios.delete')
                                    @endforeach
                                </tbody>
                            </table>
                            
                            <div class="pagination justify-content-end">
                                {!! $usuarios->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
