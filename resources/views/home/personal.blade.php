@can('home-personal')

    <div class="col-md-4 col-xl-4">
        <div class="card bg-c-blue order-card">
            <div class="card-block">
                <h5>Usuarios</h5> 
                <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cantusuarios}}</span></h2>
                <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a></p>
            </div>                                            
        </div>                                    
    </div>

    <div class="col-md-4 col-xl-4">
        <div class="card bg-c-green order-card">
            <div class="card-block">
                <h5>Roles</h5>
                <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_roles}}</span></h2>
                <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
            </div>
        </div>
    </div>


    <div class="col-md-4 col-xl-4">                                        
        <div class="card bg-c-pink order-card">
            <div class="card-block">
                <h5>Personal CAP</h5>
                <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_personales}}</span></h2>
                <p class="m-b-0 text-right"><a href="/personal" class="text-white">Ver más</a></p>
            </div>                                            
        </div>                                    
    </div>
@endcan