const mostrarHerramientas=document.getElementById("mostrarHerramientas")
const productosHerramientas=document.getElementById("productosHerramientas")

mostrarHerramientas.addEventListener("click",function(){
    productosHerramientas.classList.remove("d-none")
    productosHerramientas.classList.add("d-block")
    inicio.classList.add("d-none")
    inicio.classList.remove("d-block")
})