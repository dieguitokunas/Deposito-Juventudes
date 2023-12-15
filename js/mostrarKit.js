const mostrarKit=document.getElementById("mostrarKit")
const productosKit=document.getElementById("productosKit")
mostrarKit.addEventListener("click",function(){
    productosKit.classList.remove("d-none")
    productosKit.classList.add("d-block")
    inicio.classList.add("d-none")
    inicio.classList.remove("d-block")

})