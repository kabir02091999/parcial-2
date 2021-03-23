function prueva(tamano){
    
    var tamano = document.getElementById("tamano").value;
    var eje_x = document.getElementById("eje_x").value;
    var aje_y = document.getElementById("eje_y").value;
    //alert (tamano)
    if(eje_x>=tamano){

        alert('[ERROR] El campo debe tener un valor de...');
        return false;
    }return true;

}