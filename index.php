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
      <article id="mostrarDonaciones">
        <p>Donaciones</p>
        <i class="fa-solid fa-gift"></i>
      </article>
      <article id="mostrarDiversion">
        <p>Diversión</p>
        <i class="fa-solid fa-gamepad"></i>
      </article>
      <article id="mostrarLibreria">
        <p>Librería</p>
        <i class="fa-solid fa-book"></i>
      </article>
      <article id="mostrarHerramientas">
        <p>Herramientas</p>
        <i class="fa-solid fa-tools"></i>
      </article>
      <article id="mostrarComunicaciones">
        <p>Comunicaciones</p>
        <i class="fa-solid fa-people-group"></i>
      </article>
      <article id="mostrarKit">
        <p>Kit Escolar</p>
        <i class="fa-solid fa-pen"></i>
      </article>
    </section>

  </main>


  <?php
  include './vistas/modalRetiro.php';
  include './vistas/modalCargar.php';
  include './vistas/modalEditar.php';
  include './vistas/productos.php';
  ?>
  <script src="./js/bootstrap.bundle.min.js"></script>
  
  <script>
    
    const linkInicio = document.getElementById("inicio-link")
    
    const inicio = document.getElementById("inicio")
    
    

    linkInicio.onclick= function() {
      inicio.classList.add("d-block")
        inicio.classList.remove("d-none")
        productosTecnologia.classList.remove("d-block")
        productosTecnologia.classList.add("d-none")
        productosIndumentaria.classList.remove("d-block")
        productosIndumentaria.classList.add("d-none")
        productosInsumos.classList.remove("d-block")
        productosInsumos.classList.add("d-none")
        productosDonaciones.classList.remove("d-block")
        productosDonaciones.classList.add("d-none")
        productosDiversion.classList.remove("d-block")
        productosDiversion.classList.add("d-none")
        productosKit.classList.remove("d-block")
        productosKit.classList.add("d-none")
        productosLibreria.classList.remove("d-block")
        productosLibreria.classList.add("d-none")
        productosHerramientas.classList.remove("d-block")
        productosHerramientas.classList.add("d-none")
        productosComunicaciones.classList.remove("d-block")
        productosComunicaciones.classList.add("d-none")
      }
      const todasCategorias = [
        "tecnologia",
        "indumentaria",
        "kit",
        "donaciones",
        "libreria",
        "herramientas",
        "comunicacion",
        "diversion",
        "insumos"
      ]
      const todosTbody = [
        "tbodyTecnologia",
        "tbodyIndumentaria",
        "tbodyKit",
        "tbodyDonaciones",
        "tbodyLibreria",
        "tbodyHerramientas",
        "tbodyComunicacion",
        "tbodyDiversion",
        "tbodyInsumos"
      ]


      mostrarTecnologia.onclick= function() {
        getProductos(0)
      }
      mostrarIndumentaria.onclick= function() {
        getProductos(1)
      }
      mostrarKit.onclick= function() {
        getProductos(2)
      }
      mostrarDonaciones.onclick= function() {
        getProductos(3)
      }
      mostrarLibreria.onclick= function() {
        getProductos(4)
      }
      mostrarHerramientas.onclick= function() {
        getProductos(5)
      }
      mostrarComunicaciones.onclick= function() {
        getProductos(6)
      }
      mostrarDiversion.onclick= function() {
        getProductos(7)
      }
      mostrarInsumos.onclick= function() {
        getProductos(8)
      }

      function getProductos(id) {
        let formdata = new FormData()
        let categoria = todasCategorias[id]
        let tbodyId = todosTbody[id]
        let tbody = document.getElementById(tbodyId)
        formdata.append(categoria, true)
        fetch('db/selectProductos.php', {
            method: "POST",
            body: formdata,
          }).then(response => response.text())
          .then(data => {
            tbody.innerHTML = data
            const buttonsEditar = document.querySelectorAll(".buttonEditar")
            const buttonsEliminar = document.querySelectorAll(".buttonEliminar")
            const labelColor = document.getElementById("labelColor")
            const labelTalle = document.getElementById("labelTalle")
            const productoEditar = document.getElementById("productoEditar")
            const stockEditar = document.getElementById("stockEditar")
            const idEditar = document.getElementById("idEditar")
            const categoriaEditar = document.getElementById("categoriaEditar")
            
            buttonsEditar.forEach(button => {
              button.onclick= function() {
                const row = this.closest("tr")
                const celdas = row.querySelectorAll("td")
                const datos = []

                celdas.forEach(celda => {
                  datos.push(celda.textContent)
                })
                categoriaEditar.value = datos[0]
                idEditar.value = datos[1]
                productoEditar.value = datos[2]
                if (parseInt(categoriaEditar.value, 10) === 2) {
                  stockEditar.value = datos[5]
                  labelTalle.classList.remove("d-none")
                  labelTalle.classList.add("d-block")
                  labelColor.classList.remove("d-none")
                  labelColor.classList.add("d-block")
                } else {
                  labelTalle.classList.add("d-none")
                  labelTalle.classList.remove("d-block")
                  labelColor.classList.add("d-none")
                  labelColor.classList.remove("d-block")
                  stockEditar.value = datos[3]
                }
                const idProducto = button.getAttribute("data-id")
                modalEditar.classList.remove("d-none")
                modalEditar.classList.add("d-block")
              }
            })
            buttonsEliminar.forEach(button => {
              button.onclick = function() {
                let idProducto = button.getAttribute("data-id")
                let idCategoria = button.getAttribute("data-categoria")
                let formdata = new FormData()
                formdata.append("idProducto", idProducto)
                formdata.append("idCategoria", idCategoria)

                fetch('db/eliminarProducto.php', {
                    method: "POST",
                    body: formdata,
                  }).then(response => response.text())
                  .then(data => {
                    let select = new FormData()
                    select.append(categoria, true)

                    fetch('db/selectProductos.php', {
                        method: "POST",
                        body: select,
                      }).then(responseSelect => responseSelect.text())
                      .then(dataSelect => {
                        tbody.innerHTML = dataSelect
                        getProductos(id)
                      })

                  }).catch(err => {
                    console.error("Error: " + err)
                  })
              }
            })
          })
      }

      const enviarEditar = document.getElementById("enviarEditar")

      enviarEditar.onclick= function(e) {
        const idEditar = document.getElementById("idEditar")
        const categoriaEditar = document.getElementById("categoriaEditar")
        const productoEditar = document.getElementById("productoEditar")
        const stockEditar = document.getElementById("stockEditar")
        const talleEditar = document.getElementById("talleEditar")
        const colorEditar = document.getElementById("colorEditar")
        const alertEditarError = document.getElementById("alertEditarError")
        const alertEditarSuccess = document.getElementById("alertEditarSuccess")


        e.preventDefault()
        let data = new FormData()
        data.append("categoria", categoriaEditar.value)
        data.append("id", idEditar.value)
        data.append("producto", productoEditar.value)
        data.append("stock", stockEditar.value)
        data.append("talle", talleEditar.value)
        data.append("color", colorEditar.value)
        const tbodyId = todosTbody[categoriaEditar.value]
        const tbody = document.getElementById(tbodyId)


        fetch('db/registrarEditar.php', {
            method: "POST",
            body: data,
          }).then(response => response.text())
          .then(data => {
            let select = new FormData()
            select.append(todasCategorias[categoriaEditar.value], true)

            fetch('db/selectProductos.php', {
                method: "POST",
                body: select,
              }).then(responseSelect => responseSelect.text())
              .then(dataSelect => {
                tbody.innerHTML = dataSelect
              })

            if (data === "true") {
              alertEditarError.classList.remove("d-block")
              alertEditarError.classList.add("d-none")
              alertEditarSuccess.classList.add("d-block")
              alertEditarSuccess.classList.remove("d-none")
            } else {
              alertEditarError.classList.add("d-block")
              alertEditarError.classList.remove("d-none")
              alertEditarSuccess.classList.remove("d-block")
              alertEditarSuccess.classList.add("d-none")
            }
          }).catch(err => {
            console.error("Error: " + err)
          })
      }
    


  </script>
  <script src="./js/mostrar.js"></script>

</body>

</html>