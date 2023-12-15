    document.addEventListener("DOMContentLoaded",function (){
        const mostrarTecnologia = document.getElementById("mostrarTecnologia")
        const productosTecnologia = document.getElementById("productosTecnologia")
        
        mostrarTecnologia.addEventListener("click", function() {
            if (productosTecnologia.classList.contains("d-none")) {
                productosTecnologia.classList.remove("d-none")
                productosTecnologia.classList.add("d-block")
                inicio.classList.remove("d-block")
                inicio.classList.add("d-none")
            }
   
      
        })
    })