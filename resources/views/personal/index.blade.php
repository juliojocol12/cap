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
                
            
                        @can('crear-personal')
                        <a class="btn btn-warning" href="{{ route('personal.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
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
                                <td style="display: none;">{{ $personal->id }}</td>                                
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
                                    
                                    <form action="{{ route('personales.destroy',$personal->id) }}" method="POST">                                        
                                        @can('editar-personal')
                                        <a class="btn btn-info" href="{{ route('personales.edit',$personal->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-personal')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $personals->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
