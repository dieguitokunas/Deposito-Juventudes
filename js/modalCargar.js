document.addEventListener("DOMContentLoaded",function(){

    const cargarLink=document.getElementById("cargar-link")
    const modalCargar=document.getElementById("modal-cargar")
    const cerrarCargar=document.getElementById("cerrar-cargar")
    const mostrarCargar=document.getElementById("mostrarCargar")
    cargarLink.addEventListener("click",function(){
        if (modalCargar.classList.contains("d-none")){
            modalCargar.classList.remove("d-none")
            modalCargar.classList.add("d-block")
        }
    })
    cerrarCargar.addEventListener("click",function(){
        modalCargar.classList.remove("d-block")
        modalCargar.classList.add("d-none")
    })
    
    mostrarCargar.addEventListener("click",function(){
        if (modalCargar.classList.contains("d-none")){
            modalCargar.classList.remove("d-none")
            modalCargar.classList.add("d-block")
        }
    })






})