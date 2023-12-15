const mostrarLibreria=document.getElementById("mostrarLibreria")
const productosLibreria=document.getElementById("productosLibreria")
mostrarLibreria.addEventListener("click",function(){
    productosLibreria.classList.remove("d-none")
    productosLibreria.classList.add("d-block")
    inicio.classList.remove("d-block")
    inicio.classList.add("d-none")
})