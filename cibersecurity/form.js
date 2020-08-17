var inputs = document.getElementsByClassName('formulario__input');
for (var i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('keyup', function(){
        if(this.value.length>=1) { /*si la cantidad de valores dentro del input es mayor a 1 entonces*/
        this.nextElementSibling.classList.add('fijar');/*esta linea anadira una clase llamada FIJAR a la formulario__input*/
    } else {
        this.nextElementSibling.classList.remove('fijar');     
    }
    });
}
                              
/*Este javascript es para poder mantener el label de los input arriba de el inputbox una ves el usuarios halla escrito algo*/                       