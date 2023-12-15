<div class="modal d-none position-fixed w-100 h-100  d-flex justify-content-center align-items-center " id="modal-cargar">
  <div class=" form-cont d-flex justify-content-center bg-primary br-4 p-4 gap-2">

    <form action="" class="text-white form-cargar d-flex flex-column h-f w-300 gap-2">
      <div class="form-header align-self-end ">
        <i class="fa-solid fa-xmark h3 cerrar" id="cerrar-cargar"></i>
      </div>
      <center><span class="text-light h4">Carga de productos</span></center>

      <div class="d-flex justify-content-between align-items-center">
        <label for="cargarCategoria">Categoria: </label>
        <select name="categoria" id="cargarCategoria" class="w-100" required>
          <option value="">Categoría del producto</option>
          <?php
          $categorias = $con->query("SELECT * FROM categorias");

          while ($row = $categorias->fetch_object()) {
            echo '<option value="' . $row->id_categoria . '">' . $row->categorias . '</option>';
          }
          ?>
        </select>
      </div>
      <div class="d-flex justify-content-between align-items-center">
        <label for="cargarNombreProducto">Producto:</label>
        <input type="text" id="cargarNombreProducto" required>
      </div>

      <div class="d-flex justify-content-between align-items-center d-none" id="contTalles">
        <label for="cargarTalle">Talle: </label>
        <select name="talle" id="cargarTalle" required>
          <option value="">Talle</option>

          <?php
          $talles = $con->query("SELECT * FROM talles");
          while ($row = $talles->fetch_object()) {
            echo "<option value='" . $row->id_talles . "'>" . $row->talle_tipo1 . " / " . $row->talle_tipo2 . " / " . $row->talle_tipo3 . "</option>";
          }
          ?>
        </select>
      </div>

      <div class="d-flex justify-content-between align-items-center d-none" id="contColores">
        <label for="cargarColor">Color: </label>
        <select name="color" id="cargarColor" required>
          <option value="">Color</option>
          <?php
          $color = $con->query("SELECT * FROM colores");

          while ($row = $color->fetch_object()) {
            echo "<option value='" . $row->id_colores . "'>" . $row->colores . "</option>";
          }
          ?>
        </select>
      </div>

      <div class="d-flex justify-content-between gap-4 align-items-center">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="" id="cantidad" min="1" max="999" inputmode="numeric" required>
      </div>
      <span class="alert bg-danger text-white text-center d-none" id="alertInput"> Escriba un número válido </span>
      <span class="alert bg-danger text-white text-center d-none" id="alertError"> Hubo un problema al cargar los datos</span>
      <span class="alert bg-warning text-white text-center d-none" id="alertWarning"> Por favor,complete los campos</span>
      <span class="alert bg-success text-white text-center d-none" id="alertSuccess">Producto cargado exitosamente</span>
      <input type="submit" class="w-50 align-self-center btn btn-success" value="Cargar producto" id="enviarCarga">
    </form>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const cargarCategoria = document.getElementById("cargarCategoria")
    const cargarNombreProducto = document.getElementById("cargarNombreProducto")
    const cantidad = document.getElementById("cantidad")
    const cargarTalle = document.getElementById("cargarTalle")
    const cargarColor = document.getElementById("cargarColor")
    const inputCantidad = document.getElementById("cantidad")
    const botonCargar = document.getElementById("enviarCarga")
    const alertError = document.getElementById("alertError")
    const alertSuccess = document.getElementById("alertSuccess")
    const alertWarning = document.getElementById("alertWarning")
    const contTalles = document.getElementById("contTalles")
    const contColores = document.getElementById("contColores")

    botonCargar.addEventListener("click", function(e) {
      e.preventDefault()



      const data = new FormData()
      let categoriaValue = cargarCategoria.value
      let productoValue = cargarNombreProducto.value
      let cantidadValue = cantidad.value
      let talleValue = cargarTalle.value
      let colorValue = cargarColor.value
      let comprobar = false
      if (categoriaValue === "" || productoValue === "" || cantidadValue === "") {
        alertWarning.classList.remove("d-none")
        alertWarning.classList.add("d-block")
      } else {
        alertWarning.classList.remove("d-block")
        alertWarning.classList.add("d-none")
        comprobar = true
      }

      data.append("categoria", categoriaValue)
      data.append("producto", productoValue)
      data.append("cantidad", cantidadValue)
      data.append("talle", talleValue)
      data.append("color", colorValue)
      if (comprobar) {

        fetch('db/cargarProducto.php', {
            method: "POST",
            body: data,
          })
          .then(response => response.text())
          .then(data => {
            if (data === "true") {
              alertError.classList.remove("d-block")
              alertError.classList.add("d-none")
              alertSuccess.classList.remove("d-none")
              alertSuccess.classList.add("d-block")

            } else {
              alertError.classList.remove("d-none")
              alertError.classList.add("d-block")
              alertSuccess.classList.remove("d-block")
              alertSuccess.classList.add("d-none")
            }
          })
          .catch(err => {
            console.error("Error: " + err)
          })
      }
    })

    inputCantidad.addEventListener("input", function() {
      const rgExpress = /[0-9]/;
      const alertInput = document.getElementById("alertInput")

      if (!rgExpress.test(inputCantidad.value)) {
        inputCantidad.value = inputCantidad.value.slice(0, -1)
        if (alertInput.classList.contains("d-none")) {
          alertInput.classList.remove("d-none")
        } else {
          alertInput.classList.add("d-none")
        }
      }
    });



    cargarCategoria.addEventListener("change", function() {
      if (cargarCategoria.value == 2) {
        contColores.classList.remove("d-none")
        contColores.classList.add("d-block")
        contTalles.classList.remove("d-none")
        contTalles.classList.add("d-block")
      } else {
        contColores.classList.remove("d-block")
        contColores.classList.add("d-none")
        contTalles.classList.remove("d-block")
        contTalles.classList.add("d-none")
      }
    })

    const producto = document.getElementById("cargarProducto")

  })
</script>