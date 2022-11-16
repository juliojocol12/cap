@extends('layouts.app')
@section('title')
    Pagina principal
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Bienvenido {{\Illuminate\Support\Facades\Auth::user()->name}}</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @include('home.usuarios') 
                                @include('home.roles')
                                @include('home.personal')
                                @include('home.infantes')
                                @include('home.pacientes')
                                @include('home.familiares')
                                @include('home.prenatal')
                                @include('home.controlprenatal')
                                @include('home.posparto')
                                @include('home.controlposparto')
                                @include('home.pueblo')
                                @include('home.establecimiento')
                                @include('home.agenda')
                                @include('home.vacunas')
                                @include('home.vacunainfantes')
                                @include('home.aborto')
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

