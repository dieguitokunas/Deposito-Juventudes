const mostrarDonaciones=document.getElementById("mostrarDonaciones")
const productosDonaciones=document.getElementById("productosDonaciones")

mostrarDonaciones.addEventListener("click",function(){
    productosDonaciones.classList.remove("d-none")
    productosDonaciones.classList.add("d-block")
    inicio.classList.remove("d-block")
    inicio.classList.add("d-none")
})