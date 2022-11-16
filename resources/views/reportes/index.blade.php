@extends('layouts.app')
@section('title')
    Reportes
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Reportes</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-4 col-xl-3">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                                        <div class="card-block">
                                            <h5>Mujeres embarazadas por rango edad</h5> 
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('reportes.r1') }}" class="text-white">Generar</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>
                                
                                <div class="col-md-4 col-xl-3">
                                    <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                                        <div class="card-block">
                                            <h5>Mujeres embarazadas por trimestre </h5> 
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('reportes.r2') }}" class="text-white">Generar</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>

                                <div class="col-md-4 col-xl-3">
                                    <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
                                        <div class="card-block">
                                            <h5>Mujeres embarazadas en alto riego</h5> 
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('reportes.r3') }}" class="text-white">Generar</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>

                                <div class="col-md-4 col-xl-3">
                                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                                        <div class="card-block">
                                            <h5>Reporte general de mujeres embarazadas</h5> 
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('reportes.r4') }}" class="text-white">Generar</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>

                                <div class="col-md-4 col-xl-3">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                                        <div class="card-block">
                                            <h5>Cantidad de mujeres en el periodo puerperio</h5> 
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('reportes.r5') }}" class="text-white">Generar</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>

                                <div class="col-md-4 col-xl-3">
                                    <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                                        <div class="card-block">
                                            <h5>Cantidad de nacimientos por fechas</h5> 
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('reportes.r6') }}" class="text-white">Generar</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>

                                <div class="col-md-4 col-xl-3">
                                    <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
                                        <div class="card-block">
                                            <h5>Infantes atendidos menores a cinco años</h5> 
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('reportes.r7') }}" class="text-white">Generar</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>

                                <div class="col-md-4 col-xl-3">
                                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                                        <div class="card-block">
                                            <h5>Infantes que concluyen con la etapa de vacunación</h5> 
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('reportes.r8') }}" class="text-white">Generar</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>

                                <div class="col-md-4 col-xl-3">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                                        <div class="card-block">
                                            <h5>Reporte de índice de muertes maternas</h5> 
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('reportes.r9') }}" class="text-white">Generar</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>

                                <div class="col-md-4 col-xl-3">
                                    <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                                        <div class="card-block">
                                            <h5>Reporte de índice de abortos sucedidos</h5> 
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('reportes.r10') }}" class="text-white">Generar</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>

                                <div class="col-md-4 col-xl-3">
                                    <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
                                        <div class="card-block">
                                            <h5>Ausencia de pacientes a citas </h5> 
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('reportes.r11') }}" class="text-white">Generar</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>

                                <div class="col-md-4 col-xl-3">
                                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                                        <div class="card-block">
                                            <h5>Insumos que se estén agotando</h5> 
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('reportes.r12') }}" class="text-white">Generar</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>

                                <div class="col-md-4 col-xl-3">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                                        <div class="card-block">
                                            <h5>Inventario de insumos médicos</h5> 
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('reportes.r13') }}" class="text-white">Generar</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection