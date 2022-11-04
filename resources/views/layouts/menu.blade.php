<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Inicio</span>
    </a>

    <div class="dropright">
        <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class=" fas fa-user"></i>
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="/usuarios">
                <i class=" fas fa-user"></i><span>Usuarios</span>
            </a>
            <a class="dropdown-item" href="/roles">
                <i class=" fas fa-user-lock"></i><span>Roles</span>
            </a>
        </div>
    </div>

    <div class="dropright">
        <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class=" fas fa-user"></i> Usuarios 
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            
            <a class="nav-link" href="/personal">
                <i class=" fa fa-user-md"></i><span>Personal</span>
            </a>
            <a class="dropdown-item" href="/usuarios">
                <i class=" fas fa-user"></i><span>Usuarios</span>
            </a>
            <a class="dropdown-item" href="/roles">
                <i class=" fas fa-user-lock"></i><span>Roles</span>
            </a>
        </div>
    </div>

    <div class="dropright">
        <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class=" fas fa-user"></i> Pacientes 
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="nav-link" href="/pacientes">
            <i class=" fa fa-female"></i><span>Pacientes</span>
        </a>

        <a class="nav-link" href="/fcprenatalpostpartos">
            <i class=" fa fa-id-card"></i><span>Ficha clinica prenatal posparto</span>
        </a>

        <a class="nav-link" href="/controles">
            <i class=" fa fa-id-card"></i><span>Controles prenatal</span>
        </a>
        <a class="nav-link" href="/pospartos">
            <i class=" fa fa-id-card"></i><span>Ficha clinica postparto</span>
        </a>
            </a>
        </div>
    </div>

    <a class="nav-link" href="/infantes">
        <i class=" fas fa-solid fa-child"></i><span>Infantes</span>
    </a>
    <a class="nav-link" href="/pueblos">
        <i class=" fa fa-users"></i><span>Pueblos</span>
    </a>

    
    
    <a class="nav-link" href="/datosfamiliares">
        <i class=" fa fa-users"></i><span>Datos Familiares</span>
    </a>
    
    <a class="nav-link" href="/establecimientosaludo">
        <i class=" fa fa-hospital"></i><span>Establecimiento de salud</span>
    </a>

    <a class="nav-link" href="/evento">
        <i class=" fa fa-hospital"></i><span>Evento</span>
    </a>

</li>
