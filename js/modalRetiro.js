document.addEventListener("DOMContentLoaded", function () {
  const retiroClick = document.getElementById("retiros-link");
  const modalRetiro = document.getElementById("modal-retiro");
  const cerrarRetiro = document.getElementById("cerrar-retiro");
  retiroClick.addEventListener("click", function () {
    if (modalRetiro.classList.contains("d-none")) {
      modalRetiro.classList.remove("d-none");
      modalRetiro.classList.add("d-block");
    }
  });
  cerrarRetiro.addEventListener("click", function () {
    if (modalRetiro.classList.contains("d-block")) {
      modalRetiro.classList.remove("d-block");
      modalRetiro.classList.add("d-none");
    }
  });
  const mostrarRetiro = document.getElementById("mostrarRetiro");

  mostrarRetiro.addEventListener("click", function () {
    if (modalRetiro.classList.contains("d-none")) {
      modalRetiro.classList.remove("d-none");
      modalRetiro.classList.add("d-block");
    }
  });
});
