document.addEventListener('DOMContentLoaded', function() {

    //Seleccionar formulario
    let formulario = document.querySelector("form");   

    //Busca un div para convertirlo en una agenda
    var calendarEl = document.getElementById('agenda');

    //Ingreso de instrucciones en el calendario
    var calendar = new FullCalendar.Calendar(calendarEl, {
        //Mostar por mes el calendario
      initialView: 'dayGridMonth',
      //Traducir al español el calendario
      locale:"es",

        //barra de tarea
      headerToolbar: {
        left: 'prev,next,today',
        center: 'title',
        right: 'timeGridDay,timeGridWeek,dayGridMonth,listWeek'
      },

      //mostrar informacion en el dia que se seleccione
      dateClick:function(info){
        $("#evento").modal('show');
      },
    });

    //Mostrar el calendario
    calendar.render();

    //capturar accion del boton
    document.getElementById("btnGuardar").addEventListener("click",function(){
        //recuperar la informacion
        const datos = new FormData(formulario);
        console.log(datos);
        console.log(formulario.title.value);
        console.log(formulario.Descripcion.value);
        console.log(formulario.start.value);
        console.log(formulario.end.value);

        
    });
});