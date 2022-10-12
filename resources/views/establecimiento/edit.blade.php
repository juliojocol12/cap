@extends('layouts.app')

@section('template_title')
    Update Establecimiento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Establecimiento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('establecimientos.update', $establecimiento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('establecimiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
