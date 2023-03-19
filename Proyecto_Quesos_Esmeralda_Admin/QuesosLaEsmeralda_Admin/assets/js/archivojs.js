function registraradministrador(){
    alert("Hola, Te has registrado como admin");
}

function registrarproducto(){
    alert("Hola, Has registrado un producto");
}

function registrarinventario(){
    alert("Hola, Has Guardado un inventario");
}

function eliminardatos(){
    alert("Hola, Has eliminado los datos Correctamente");
}

function editardatos(){
    alert("Hola, Has editado los datos Correctamente");
}

function confirmDelete(){
    
    var respuesta = confirm("Estas seguro que deseas eliminar los datos");

    if(respuesta == true){
        return true;
    }else{
        return false;
    }
}



