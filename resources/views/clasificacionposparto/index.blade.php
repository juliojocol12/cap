@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Clasificacion Posparto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                           
                        <a class="btn btn-warning" href="{{ route('clasificacionposparto.create') }}">Nuevo</a>
            
                        <table class="table table-striped table-bordered mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Problemas Detectados</th>                                                            
                              </thead>
                              <tbody>
                            @foreach ($clasificacionpospartos as $clasificacionposparto)
                            <tr>
                                <td style="display: none;">{{ $clasificacionposparto->idClasificacionPospartos }}</td>                                
                                <td>{{ $clasificacionposparto->ProblemasDetectados }}</td>
                                <td>
                                    
                                    <a class="btn btn-info" href="{{ route('clasificacionposparto.edit', $clasificacionposparto->idClasificacionPospartos) }}">Editar</a>
                                    {!! Form::open(['method'=> 'DELETE', 'route'=> ['clasificacionposparto.destroy', $clasificacionposparto->idClasificacionPospartos], 'style'=>'display:inline' ]) !!}
                                                    {!! Form::submit('Borrar', ['class'=>'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>                      
                                        </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->                                      
                        <div class="pagination justify-content-end">
                            {!! $clasificacionpospartos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
