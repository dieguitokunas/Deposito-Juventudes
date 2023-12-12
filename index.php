<?php
require './db/conn.php';
require './db/selectProductos.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/bootstrap.min.css">
  <link rel="stylesheet" href="./styles/index.css">
  <script src="https://kit.fontawesome.com/825e76f8f3.js" crossorigin="anonymous"></script>

  <title>Depósito || Secretaria de Juventudes</title>
</head>

<body class="bg-primary container-fluid p-0 vh-100">
  <header class="border min-h-50 ">
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Depósito 2 || Secretaría de Juventudes La Matanza</a>
        <div class="offcanvas offcanvas-start bg-primary text-light" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav d-flex flex-grow-1 p-3 br-4 bg-light h-fit">
              <li class="nav-item">
                <a class="nav-link text-dark" href="#" id="inicio-link" data-bs-target="#offcanvasNavbar" data-bs-toggle="offcanvas">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" href="#" id="retiros-link">Retirar producto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" href="#" id="cargar-link">Cargar producto</a>
              </li>

              <div class="accordion " id="accordionFlushExample">
                <div class="accordion-item  w-100 ">
                  <a href="" class="nav-link  text-dark collapsed d-flex gap-2 align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Categorías <i class="fa-solid fa-arrow-down"></i>
                  </a>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <ul class="navbar-nav text-light d-flex flex-grow-1 pe-3 ">
                        <li class="nav-item">
                          <p href="" class="nav-link  text-dark" id="link-tecnologia">Tecnología</p>

                        </li>
                        <li class="nav-item">
                          <p href="" class="nav-link  text-dark" id="link-libreria">Librería</p>
                        </li>
                        <li class="nav-item">
                          <p href="" class="nav-link  text-dark " id="link-indumentaria">Indumentaria</p>
                        </li>
                        <li class="nav-item">
                          <p href="" class="nav-link  text-dark " id="link-insumos">Insumos</p>
                        </li>
                        <li class="nav-item">
                          <p href="" class="nav-link  text-dark" id="link-diversion">Diversión</p>
                        </li>
                        <li class="nav-item">
                          <p href="" class="nav-link  text-dark" id="link-herramientas">Herramientas</p>
                        </li>
                        <li class="nav-item">
                          <p href="" class="nav-link  text-dark" id="link-comunicaciones">Comunicaciones</p>
                        </li>
                        <li class="nav-item">
                          <p href="" class="nav-link  text-dark" id="link-donaciones">Donaciones</p>
                        </li>
                        <li class="nav-item">
                          <p href="" class="nav-link  text-dark" id="link-kit">Kit Escolar</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>




                <li class="nav-item">
                  <a href="" class="nav-link text-dark cerrar-link">
                    Cerrar sesión
                  </a>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>


  



  <?php
  include './vistas/modalRetiro.php';
  include './vistas/modalCargar.php';
  include './vistas/tecnologia.php';
  include './vistas/indumentaria.php';
  include './vistas/insumos.php';
  ?>
  <main class="min-h-100 h-75  p-2 mt-5 d-block" id="inicio">
  <h1 class="text-center text-light">INICIO</h1>
    <section class="inicio-contenedor container-fluid bg-light h-100 max-h-100p p-4 br-4 ">
      <article id="mostrarRetiro">
        <p>Retirar Productos</p>
        <img src="./assets/perfil.jpg" alt="">
      </article>
      <article id="mostrarCargar">
        <p>Cargar Productos</p>
        <img src="./assets/perfil.jpg" alt="">
      </article>
      <article id="mostrarTecnologia">
        <p>Tecnología</p>
        <i class="fa-solid fa-computer"></i>
      </article>
      <article id="mostrarIndumentaria">
        <p>Indumentaria</p>
        <i class="fa-solid fa-shirt"></i>
      </article>
      <article id="mostrarInsumos">
        <p>Insumos</p>
        <i class="fa-solid fa-cookie-bite"></i>
      </article>
      <article>
        <p>Donaciones</p>
        <i class="fa-solid fa-gift"></i>
      </article>
      <article>
        <p>Diversión</p>
        <i class="fa-solid fa-gamepad"></i>
      </article>
      <article>
        <p>Librería</p>
        <i class="fa-solid fa-book"></i>
      </article>
      <article>
        <p>Herramientas</p>
        <i class="fa-solid fa-tools"></i>
      </article>
      <article>
        <p>Comunicaciones</p>
        <i class="fa-solid fa-people-group"></i>
      </article>
      <article>
        <p>Kit Escolar</p>
        <i class="fa-solid fa-pen"></i>
      </article>
    </section>

  </main>


  <script src="./js/bootstrap.bundle.min.js"></script>
  <script  src="./js/modalRetiro.js"></script>
  <script  src="./js/modalCargar.js"></script>
  <script  src="./js/mostrarTecnologia.js"></script>
  <script src="./js/mostrarIndumentaria.js"></script>
  <script src="./js/mostrarInsumos.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {

      const linkInicio = document.getElementById("inicio-link")
            
      const inicio = document.getElementById("inicio")
      
       

      linkInicio.addEventListener("click", function() {
        inicio.classList.add("d-block")
        inicio.classList.remove("d-none")
        productosTecnologia.classList.remove("d-block")
        productosTecnologia.classList.add("d-none")
        productosIndumentaria.classList.remove("d-block")
        productosIndumentaria.classList.add("d-none")
        productosInsumos.classList.remove("d-block")
        productosInsumos.classList.add("d-none")
      })





    })
  </script>
</body>

</html>