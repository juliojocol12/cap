@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Pueblo</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-warning" href="{{ route('pueblos.create') }}">Ingresar Pueblo</a>

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($pueblos as $pueblo)
                                        <tr>
                                            <td style="display: none;">{{ $pueblo->idPueblo }}</td>
                                            <td>{{$pueblo->Nombre}}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{ route('pueblos.edit', $pueblo->idPueblo) }}">Editar</a>
                                                {!! Form::open(['method'=> 'DELETE', 'route'=> ['pueblos.destroy', $pueblo->idPueblo], 'style'=>'display:inline' ]) !!}
                                                <input type="submit" onclick="return confirm ('¿Desea eliminar la información?')" class="btn btn-danger" value="Borrar">
                                                {!! Form::close() !!}
                                            </td>
                                                                                  
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                                
                            
                            <div class="pagination justify-content-end">
                                {!! $pueblos->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
