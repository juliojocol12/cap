{{--
@extends('errors::minimal')
@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __('Forbidden'))

--}}

@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">LO SIENTO NO TIENE ACCESO A ESTA PAGINA</h3>
        </div>
    </section>
@endsection
