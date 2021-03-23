function validacion(){

    var numero
    numero = document.getElementById("numero").value;
    
    if(numero<8){
        console.log(numero);
        alert('[ERROR] El campo debe tener un valor de...');
        return false;
    }else if(numero>20){
        alert('[ERROR] El campo debe tener un valor de...');
        return false;
    }
    return true

}


