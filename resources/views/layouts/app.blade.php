<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 4.1.1 -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="//fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6da8e80d51.js" crossorigin="anonymous"></script>
    
    
    
    <link rel="stylesheet" href="{{ asset('assets/css/iziToast.min.css') }}">
    <link href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    

    <!-- Script para agenda -->

    <!-- css de Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >

    <!-- js de Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <link rel="stylesheet" href="{{ asset('fullcalendar/core/main.css')}}">
    <link rel="stylesheet" href="{{ asset('fullcalendar/daygrid/main.css')}}">
    <link rel="stylesheet" href="{{ asset('fullcalendar/list/main.css')}}">
    <link rel="stylesheet" href="{{ asset('fullcalendar/timegrid/main.css')}}">

    <script src="{{ asset('fullcalendar/core/main.js')}}" defer></script>

    <script src="{{ asset('fullcalendar/interaction/main.js')}}" defer></script>

    <script src="{{ asset('fullcalendar/daygrid/main.js')}}" defer></script>
    <script src="{{ asset('fullcalendar/list/main.js')}}" defer></script>
    <script src="{{ asset('fullcalendar/timegrid/main.js')}}" defer></script>

    <script src='fullcalendar/core/locales/es.js'></script>


    <script>

        document.addEventListener("DOMContentLoaded", function () {
        var calendarEl = document.getElementById("calendar");

        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'es',
            plugins: ["interaction", "dayGrid", "timeGrid", "list"],
            selectable: true,
            header: {
            left: "prev,next today ",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay"
            },
            dateClick: function (info) {   

                limpiarFormulario();

                $('#txtFecha').val(info.dateStr);
                $('#txtFecha').prop("disabled",true);

                $('#btnAgregar').prop("disabled",false);
                $('#btnModificar').prop("disabled",true);
                $('#btnEliminar').prop("disabled",true);


                
                $('#exampleModal').modal('show');
                //console.log(info);
                //calendar.addEvent({ title:"Evento X", date:info.dateStr});

            },
            eventClick:function(info){

                $('#btnAgregar').prop("disabled",true);
                $('#btnModificar').prop("disabled",false);
                $('#btnEliminar').prop("disabled",false);


                console.log(info);
                console.log(info.event.title);
                console.log(info.event.start);
                console.log(info.event.datosPersonalesPacientes_id);
                console.log(info.event.establecimiento);
                console.log(info.event.Establecimientoid);
                console.log(info.event.Usuario_id);
                console.log(info.event.Estado);
                console.log(info.event.comunidad);

                console.log(info.event.end);
                console.log(info.event.textColor);
                console.log(info.event.backgroundColor);

                console.log(info.event.extendedProps.descripcion);

                $('#txtID').val(info.event.id);
                $('#txtTitulo').val(info.event.title);
                $('#txtDatosP').val(info.event.extendedProps.datosPersonalesPacientes_id);
                $('#txtEstablecimiento').val(info.event.extendedProps.establecimiento);
                $('#txtEstable').val(info.event.extendedProps.Establecimientoid);
                $('#txtUsuario').val(info.event.extendedProps.Usuario_id);
                $('#txtEstado').val(info.event.extendedProps.Estado);
                $('#txtComunidad').val(info.event.extendedProps.comunidad);

                mes = (info.event.start.getMonth()+1);
                dia = (info.event.start.getDate());
                anio = (info.event.start.getFullYear());

                mes=(mes<10)?"0"+mes:mes;
                dia=(dia<10)?"0"+dia:dia;

                minutos=info.event.start.getMinutes();
                hora=info.event.start.getHours();

                minutos=(minutos<10)?"0"+minutos:minutos;
                hora=(hora<10)?"0"+hora:hora;

                horario = (hora+":"+minutos);

                $('#txtFecha').val(anio+"-"+mes+"-"+dia);
                $('#txtFecha').prop("disabled",false);
                $('#txtHora').val(horario);
                $('#txtColor').val(info.event.backgroundColor)

                $('#txtDescripcion').val(info.event.extendedProps.descripcion)

                
                $('#exampleModal').modal('show');
                },
                events:"{{ url('/eventos/show') }}"

        });
        //calendar.setOption('locale','es');

        calendar.render();

        $('#btnAgregar').click(function(){
            ObjEvento=recolectarDatosGUI("POST");

            EnviarInformacion('',ObjEvento);
        });

        $('#btnEliminar').click(function(){
            ObjEvento=recolectarDatosGUI("DELETE");

            EnviarInformacion('/'+$('#txtID').val(),ObjEvento);
        });

        $('#btnModificar').click(function(){
            ObjEvento=recolectarDatosGUI("PATCH");

            EnviarInformacion('/'+$('#txtID').val(),ObjEvento);
        });

        function recolectarDatosGUI(method){

            nuevoEvento={
                id:$('#txtID').val(),
                title:$('#txtTitulo').val(),
                descripcion:$('#txtDescripcion').val(),
                datosPersonalesPacientes_id:$('#txtDatosP').val(),	
                establecimiento:$('#txtEstablecimiento').val(),	
                Establecimientoid:$('#txtEstable').val(),	
                Usuario_id:$('#txtUsuario').val(),	
                Estado:$('#txtEstado').val(),	
                comunidad:$('#txtComunidad').val(),	
                color:$('#txtColor').val(),	
                textColor:'#FFFFFF',	
                start:$('#txtFecha').val()+" "+$('#txtHora').val(),	
                end:$('#txtFecha').val()+" "+$('#txtHora').val(),  

                '_token':$("meta[name='csrf-token']").attr("content"),
                '_method':method
            }
            return (nuevoEvento);
        }
        function EnviarInformacion(accion,objEvento){

            $.ajax(
                {
                    type:"POST",
                    url:"{{ url('/eventos') }}"+accion,
                    data:objEvento,
                    success:function(msg){ 
                    console.log(msg);
                    $('#exampleModal').modal('toggle');
                    calendar.refetchEvents();
                    },
                    error:function(){ alert("Hay un error");}
                }
            );
        }

        function limpiarFormulario(){

                $('#txtID').val("");
                $('#txtTitulo').val("");
                $('#txtFecha').val("");
                $('#txtDatosP').val("");
                $('#txtEstablecimiento').val("");
                $('#txtEstable').val("");
                $('#txtUsuario').val("");
                $('#txtEstado').val("");
                $('#txtComunidad').val("");
                $('#txtHora').val("07:00");
                $('#txtColor').val("");
                $('#txtDescripcion').val("");
        }

        });

    </script>

  <!-- Fin de agenda -->
    
    

@yield('page_css')
<!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/components.css')}}">
    @yield('page_css')
    @yield('scripts')
    @yield('css')

    <script>
    function pulsar(e) {
    tecla = (document.all) ? e.keyCode :e.which;
    return (tecla!=13);
    }
    </script>

    <script>
    function tab(t) {
    teclatab = (document.all) ? t.keyCode :t.which;
    return (teclatab!=9);
    }
    </script>
</head>
<body>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            @include('layouts.header')

        </nav>

        <div class="main-sidebar main-sidebar-postion">
            @include('layouts.sidebar')
        </div>
        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        <footer class="main-footer">
            @include('layouts.footer')
        </footer>
    </div>
</div>

@include('profile.change_password')
@include('profile.edit_profile')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script sr="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>


<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('web/js/stisla.js') }}"></script>
<script src="{{ asset('web/js/scripts.js') }}"></script>
<script src="{{ mix('assets/js/profile.js') }}"></script>
<script src="{{ mix('assets/js/custom/custom.js') }}"></script>
<script src="{{ asset('js/agenda.js') }}"></script>
@yield('page_js')

<script>
    let loggedInUser =@json(\Illuminate\Support\Facades\Auth::user());
    let loginUrl = '{{ route('login') }}';
    const userUrl = '{{url('users')}}';
    // Loading button plugin (removed from BS4)
    (function ($) {
        $.fn.button = function (action) {
            if (action === 'loading' && this.data('loading-text')) {
                this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
            }
            if (action === 'reset' && this.data('original-text')) {
                this.html(this.data('original-text')).prop('disabled', false);
            }
        };
    }(jQuery));

    function marcar(source){
// obtenemos el elemento clickeado con source buscamos a su padre -> <summary> y luego al padre de <summary> que es <details>
// seleccionamos todos los inputs hijos de <details> y los recorremos
var checkboxes = source.parentNode.parentNode.getElementsByTagName('input'); //obtenemos todos los controles del tipo Input
for (i = 0; i < checkboxes.length; i++){ //recorremos todos los controles

    if (checkboxes[i].type == "checkbox"){ //solo si es un checkbox entramos

        checkboxes[i].checked = source.checked; //si es un checkbox le damos el valor del checkbox que lo llamó (Marcar/Desmarcar Todos)
    }
}
}

// no entiendo para que es esta funcion!

function marcarHijos(source){
var form2 = document.getElementById("form2");
var checkboxes = form2.getElementsByTagName('input'); //obtenemos todos los controles del tipo Input
for (i = 0; i < checkboxes.length; i++){ //recorremos todos los controles

    if (checkboxes[i].type == "checkbox"){ //solo si es un checkbox entramos
    
    checkboxes[i].checked = source.checked; //si es un checkbox le damos el valor del checkbox que lo llamó (Marcar/Desmarcar Todos)
    }
}
}


function marcar(nombre){
todos= document.forms[0];
for (x=0;x<todos.length;x++){
if(todos[nombre+'['+x+']']){
todos[nombre+'['+x+']'].checked=true;
}
}
}


    
</script>
</html>
