const mostrarComunicaciones=document.getElementById("mostrarComunicaciones")
const productosComunicaciones=document.getElementById("productosComunicaciones")

mostrarComunicaciones.addEventListener("click",function(){
    productosComunicaciones.classList.remove("d-none")
    productosComunicaciones.classList.add("d-block")
    inicio.classList.remove("d-block")
    inicio.classList.add("d-none")
})