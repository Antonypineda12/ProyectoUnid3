var btnMenu = document.getElementById('btn-menu');
var nav = document.getElementById('nav');
btnMenu.addEventListener('click', function(){
    nav.classList.toggle('mostrar');
})
var inputs = document.getElementsByClassName('formulario_input-text')
for (var i = 0; i < inputs.length; i++){
    inputs[i].addEventListener('keyup', function(){
        if(this.value.length>=1){
                this.nextElementSibling.classList.add('fijar');
        } else {
            this.nextElementSibling.classList.remove('fijar')
        }    })
}
function enviar(){
var nombre, correo, telefono1, telefono2, curso;
nombre= document.getElementById("nombre").value;
correo= document.getElementById("correo").value;
telefono1= document.getElementById("telefono1").value;
telefono2= document.getElementById("telefono2").value;
curso= document.getElementById("curso").value;
    if(nombre === "" || correo === "" || telefono1 === "" || telefono2 === "" || curso === ""){
    alert ("Todos los campos son obligatorios");
    return false;
    }
    else if(nombre.length>30 || correo.length>40 || telefono1.length>12 || telefono2.length>12 || curso.length>30){
    alert("demasiados carácteres");
    return false;   
    }
    else{
        alert("Gracias por su registro, nos pondremos en contacto con usted")    
    }}
