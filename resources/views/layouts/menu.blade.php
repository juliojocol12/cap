<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    
    <hr class="dropdown-divider">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Inicio</span>
    </a>
    <hr class="dropdown-divider">
    
    <div class="sidebar-brand nav-link">

        <div class="dropdown ">
            <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuUsuarios" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="Usuarios">
                <i class="fas fa-user"></i> Usuarios
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuUsuarios">
                @include('layouts.usuario')
            </div>
        </div>
        <hr class="dropdown-divider">

        <div class="dropdown ">
            <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuPacientes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="Pacientes">
                <i class="fas fa-female"></i> Pacientes
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuPacientes">
                @include('layouts.pacientes')                
            </div>
        </div>
        <hr class="dropdown-divider">

        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuControles" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="Fichas clinicas">
                <i class="fas fa-briefcase-medical"></i> Fichas clinicas
            <div class="dropdown-menu" aria-labelledby="dropdownMenuControles">
                @include('layouts.controles')           
            </div>
        </div>
        <hr class="dropdown-divider">

        <div class="dropright">
        @include('layouts.bar')
        </div>
        <hr class="dropdown-divider">
    </div>


    <div class="sidebar-brand sidebar-brand-sm">

        <div class="dropright" >
            <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuUsuarios" data-toggle="dropdown" aria-haspopup="true" href="Usuarios">
                <i class="fas fa-user"></i> 
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuUsuarios">
                @include('layouts.usuario')
            </div>
        </div>
        <hr class="dropdown-divider">

        <div class="dropright" >
            <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuPacientes"  data-toggle="dropdown" aria-expanded="false" href="Pacientes">
                <i class="fas fa-female"></i>  
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuPacientes">
                @include('layouts.pacientes')
            </div>
        </div>
        <hr class="dropdown-divider">

        <div class="dropright" >
            <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuControles"  data-toggle="dropdown" aria-expanded="false" href="Fichas clinicas">
                <i class="fas fa-briefcase-medical"></i>  
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuControles">
                @include('layouts.controles')
            </div>
        </div>
        <hr class="dropdown-divider">
        

        @include('layouts.barcon')
        <hr class="dropdown-divider">
    </div>    

</li>
