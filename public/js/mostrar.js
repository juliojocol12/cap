function mostrarFecha(){
        date = new Date();
        year = date.getFullYear();
        month = date.getMonth() + 1;
        day = date.getDate();

        document.getElementById("mostrarFecha").innerHTML = day + "/" + month + "/" + year;

}