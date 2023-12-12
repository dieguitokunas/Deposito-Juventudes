<div class="modal d-none position-fixed w-100 h-100  d-flex justify-content-center align-items-center " id="modal-cargar">
  <div class="min-w-f form-cont d-flex justify-content-center bg-primary br-4 p-4 gap-2">

    <form action="" class="text-white form-cargar d-flex flex-column  gap-2">
      <div class="form-header align-self-end ">
        <i class="fa-solid fa-xmark h3 cerrar" id="cerrar-cargar"></i>
      </div>
      <center><span class="text-light h4">Carga de productos</span></center>

      <select name="categoria" id="cargarCategoria" class="w-100" required>
        <option value="">Categoría del producto</option>
        <?php
        $categorias = $con->query("SELECT * FROM categorias");

        while ($row = $categorias->fetch_object()) {
          echo '<option value="' . $row->categorias . '">' . $row->categorias . '</option>';
        }
        ?>

      </select>
      <div class="d-flex justify-content-between">
      <label for="cargarNombreProducto">Producto:</label>
        <input type="text" id="cargarNombreProducto">
      </div>
        <div class="d-flex justify-content-between gap-4 align-items-center">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="" id="cantidad" min="1" max="999" inputmode="numeric" required>
      </div>
      <span class="alert bg-danger text-white d-none" id="alertInput"> Escriba un número válido </span>
      <input type="submit" class="w-50 align-self-center btn btn-success" value="Cargar producto">
    </form>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {

    const inputCantidad = document.getElementById("cantidad")

    inputCantidad.addEventListener("input", function() {
      const rgExpress = /[0-9]/;
      const alertInput = document.getElementById("alertInput")

      if (!rgExpress.test(inputCantidad.value)) {
        inputCantidad.value = inputCantidad.value.slice(0,-1)
        if (alertInput.classList.contains("d-none")) {
          alertInput.classList.remove("d-none")
        } else {
          alertInput.classList.add("d-none")
        }
      }
    });


    const categoria = document.getElementById("cargarCategoria")
    const producto = document.getElementById("cargarProducto")

  })
</script>