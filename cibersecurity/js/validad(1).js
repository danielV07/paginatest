function validar(){
    var nombre, apellido, correo, usuario, clave, telefono, expresion;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    correo = document.getElementById("correo").value;
    usuario = document.getElementById("usuario").value;
    clave = document.getElementById("password").value;
    telefono = document.getElementById("celular").value;
    
    expresion = /\w+@+\w+\.+[a-z]/;
    
    if(nombre === "" || apellido === "" || correo === "" || usuario === "" || clave === "" || telefono === "")  {
        alert("Todos los campos son obligatorios!");
        return false;
    }
    else if(nombre.length>30){
        alert("El nombre es muy largo!");
        return false;
    }
    else if(apellido.length>50){
        alert("El apellido es muy largo!");
        return false;
    }
    else if(correo.length>100){
        alert("El correo es muy largo!");
        return false;
    }
    else if(!expresion.test(correo)){
        alert("El correo no valido");
        return false;
    }    
    else if(usuario.length>20 || clave.length>20){
        alert("El usuario y clave solo deben tener 20 caracteres como maximo!");
        return false;
    }
    else if(telefono.length>10){
        alert("El telefono es muy largo!");
        return false;
    }
    else if(isNaN(telefono)){
        alert("El telefono debe ser numerico!");
        return false;
    }
}
