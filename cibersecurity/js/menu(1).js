var btnmenu = document.getElementById('btn-menu');
var nav = document.getElementById('nav');

btnmenu.addEventListener('click', function () {  //Esta clase crea un evento de click y el evento llama a la clase mostrar que esta en estilos.css , la cual simplemente regresa el menu a su posicion con left=0, ya que anteriormente estaba en left=-100
    nav.classList.toggle('mostrar');
});