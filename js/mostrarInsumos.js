document.addEventListener("DOMContentLoaded",function (){
    const mostrarInsumos=document.getElementById("mostrarInsumos")
    const productosInsumos=document.getElementById("productosInsumos")
    mostrarInsumos.addEventListener("click", function() {
        if (productosInsumos.classList.contains("d-none")) {
            productosInsumos.classList.remove("d-none")
            productosInsumos.classList.add("d-block")
            inicio.classList.remove("d-block")
            inicio.classList.add("d-none")
        }
        
    })
})