//Tecnologia

const mostrarTecnologia = document.getElementById("mostrarTecnologia");
const productosTecnologia = document.getElementById("productosTecnologia");

mostrarTecnologia.addEventListener("click",()=>{
  if (productosTecnologia.classList.contains("d-none")) {
    productosTecnologia.classList.remove("d-none");
    productosTecnologia.classList.add("d-block");
    inicio.classList.remove("d-block");
    inicio.classList.add("d-none");
}
});
// Libreria
const mostrarLibreria = document.getElementById("mostrarLibreria");
const productosLibreria = document.getElementById("productosLibreria");
mostrarLibreria.addEventListener("click",()=> {
  productosLibreria.classList.remove("d-none");
  productosLibreria.classList.add("d-block");
  inicio.classList.remove("d-block");
  inicio.classList.add("d-none");
});

// Kit escolar

const mostrarKit = document.getElementById("mostrarKit");
const productosKit = document.getElementById("productosKit");
mostrarKit.addEventListener("click",()=> {
  productosKit.classList.remove("d-none");
  productosKit.classList.add("d-block");
  inicio.classList.add("d-none");
  inicio.classList.remove("d-block");
});

// Insumos

const mostrarInsumos = document.getElementById("mostrarInsumos");
const productosInsumos = document.getElementById("productosInsumos");
mostrarInsumos.addEventListener("click",() =>{
  if (productosInsumos.classList.contains("d-none")) {
    productosInsumos.classList.remove("d-none");
    productosInsumos.classList.add("d-block");
    inicio.classList.remove("d-block");
    inicio.classList.add("d-none");
  }
});

// Indumentaria

const mostrarIndumentaria = document.getElementById("mostrarIndumentaria");
mostrarIndumentaria.addEventListener("click",()=> {
  if (productosIndumentaria.classList.contains("d-none")) {
    productosIndumentaria.classList.remove("d-none");
    productosIndumentaria.classList.add("d-block");
    inicio.classList.remove("d-block");
    inicio.classList.add("d-none");
  }
});

// Herramientas

const mostrarHerramientas = document.getElementById("mostrarHerramientas");
const productosHerramientas = document.getElementById("productosHerramientas");

mostrarHerramientas.addEventListener("click",()=> {
  productosHerramientas.classList.remove("d-none");
  productosHerramientas.classList.add("d-block");
  inicio.classList.add("d-none");
  inicio.classList.remove("d-block");
});

// Diversion

const mostrarDiversion = document.getElementById("mostrarDiversion");
const productosDiversion = document.getElementById("productosDiversion");
mostrarDiversion.addEventListener("click",()=> {
  productosDiversion.classList.remove("d-none");
  productosDiversion.classList.add("d-block");
  inicio.classList.remove("d-block");
  inicio.classList.add("d-none");
});

// Donaciones

const mostrarDonaciones = document.getElementById("mostrarDonaciones");
const productosDonaciones = document.getElementById("productosDonaciones");

mostrarDonaciones.addEventListener("click",()=> {
  productosDonaciones.classList.remove("d-none");
  productosDonaciones.classList.add("d-block");
  inicio.classList.remove("d-block");
  inicio.classList.add("d-none");
});

// Comunicaciones

const mostrarComunicaciones = document.getElementById("mostrarComunicaciones");
const productosComunicaciones = document.getElementById(
  "productosComunicaciones"
);

mostrarComunicaciones.addEventListener("click",()=> {
  productosComunicaciones.classList.remove("d-none");
  productosComunicaciones.classList.add("d-block");
  inicio.classList.remove("d-block");
  inicio.classList.add("d-none");
});

//Modal retiros

const retiroClick = document.getElementById("retiros-link");
const modalRetiro = document.getElementById("modal-retiro");
const cerrarRetiro = document.getElementById("cerrar-retiro");
retiroClick.addEventListener("click",()=> {
  if (modalRetiro.classList.contains("d-none")) {
    modalRetiro.classList.remove("d-none");
    modalRetiro.classList.add("d-block");
  }
});
cerrarRetiro.addEventListener("click",()=> {
  if (modalRetiro.classList.contains("d-block")) {
    modalRetiro.classList.remove("d-block");
    modalRetiro.classList.add("d-none");
  }
});
const mostrarRetiro = document.getElementById("mostrarRetiro");

mostrarRetiro.addEventListener("click",()=> {
  if (modalRetiro.classList.contains("d-none")) {
    modalRetiro.classList.remove("d-none");
    modalRetiro.classList.add("d-block");
  }
});

// Modal Cargar

const cargarLink = document.getElementById("cargar-link");
const modalCargar = document.getElementById("modal-cargar");
const cerrarCargar = document.getElementById("cerrar-cargar");
const mostrarCargar = document.getElementById("mostrarCargar");
cargarLink.addEventListener("click",()=>{
  if (modalCargar.classList.contains("d-none")) {
    modalCargar.classList.remove("d-none");
    modalCargar.classList.add("d-block");
  }
});
cerrarCargar.addEventListener("click",()=>{
  modalCargar.classList.remove("d-block");
  modalCargar.classList.add("d-none");
});

mostrarCargar.addEventListener("click",()=>{
  if (modalCargar.classList.contains("d-none")) {
    modalCargar.classList.remove("d-none");
    modalCargar.classList.add("d-block");
  }
});

// Modal Editar
const modalEditar = document.getElementById("modal-editar");
const cerrarEditar = document.getElementById("cerrar-editar");

cerrarEditar.addEventListener("click",()=>{
  modalEditar.classList.remove("d-block");
  modalEditar.classList.add("d-none");
});
