@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- definicion de permisos--}}
                            @can('crear-rol')
                                <a class="btn btn-warning" href="{{ route('roles.create') }}">Nuevo</a>
                            @endcan
                            
                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="color:#fff;">Roles</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($roles as $role)
                                        <tr>
                                            <td>{{$role->name}}</td>
                                            <td>
                                                @can('editar-rol')
                                                    <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Editar</a>
                                                @endcan()
                                                @can('borrar-rol')
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$role->id}}">Eliminar</button>
                                                @endcan()
                                            </td>
                                        </tr>
                                    @include('roles.delete')
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $roles->links() !!}
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection