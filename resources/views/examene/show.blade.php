@extends('layouts.app')

@section('template_title')
    {{ $examene->name ?? 'Show Examene' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Examene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('examenes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Establecimiento Id:</strong>
                            {{ $examene->establecimiento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tipoexamen:</strong>
                            {{ $examene->tipoexamen }}
                        </div>
                        <div class="form-group">
                            <strong>Resultado:</strong>
                            {{ $examene->resultado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $examene->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
