const mostrarDiversion=document.getElementById("mostrarDiversion")
const productosDiversion=document.getElementById("productosDiversion")
mostrarDiversion.addEventListener("click",function(){
    productosDiversion.classList.remove("d-none")
    productosDiversion.classList.add("d-block")
    inicio.classList.remove("d-block")
    inicio.classList.add("d-none")

})