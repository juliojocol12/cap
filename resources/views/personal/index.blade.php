@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Personal</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        <a class="btn btn-warning" href="{{ route('personal.create') }}">Nuevo</a>
            
                        <table class="table table-striped table-bordered mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">CUI</th>                                    
                                    <th style="color:#fff;">Telefono</th>
                                    <th style="color:#fff;">Direccion</th>
                                    <th style="color:#fff;">Cargo</th>
                                    <th style="color:#fff;">FechaNacimiento</th>  
                                    <th style="color:#fff;">NivelAcademico</th>
                                    <th style="color:#fff;">CorreoElectronico</th> 
                                    <th style="color:#fff;">Observaciones</th>                                                                
                              </thead>
                              <tbody>
                            @foreach ($personales as $personal)
                            <tr>
                                <td style="display: none;">{{ $personal->idPersonal }}</td>                                
                                <td>{{ $personal->Nombre }}</td>
                                <td>{{ $personal->CUI }}</td>
                                <td>{{ $personal->Telefono }}</td>
                                <td>{{ $personal->Direccion }}</td>
                                <td>{{ $personal->Cargo }}</td>
                                <td>{{ $personal->FechaNacimiento }}</td>
                                <td>{{ $personal->NivelAcademico }}</td>
                                <td>{{ $personal->CorreoElectronico }}</td>
                                <td>{{ $personal->Observaciones }}</td>
                                <td>
                                    
                                    <a class="btn btn-info" href="{{ route('personal.edit', $personal->idPersonal) }}">Editar</a>
                                    {!! Form::open(['method'=> 'DELETE', 'route'=> ['personal.destroy', $personal->idPersonal], 'style'=>'display:inline' ]) !!}
                                                    {!! Form::submit('Borrar', ['class'=>'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>                      
                                        </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->                                      
                        <div class="pagination justify-content-end">
                            {!! $personales->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
