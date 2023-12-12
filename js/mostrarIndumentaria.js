document.addEventListener("DOMContentLoaded",function (){
    const mostrarIndumentaria=document.getElementById("mostrarIndumentaria")
    mostrarIndumentaria.addEventListener("click", function() {
        if (productosIndumentaria.classList.contains("d-none")) {
            productosIndumentaria.classList.remove("d-none")
            productosIndumentaria.classList.add("d-block")
            inicio.classList.remove("d-block")
            inicio.classList.add("d-none")
        }
        
    })
})