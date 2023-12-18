<div class="modal d-none position-fixed w-100 h-100  d-flex justify-content-center align-items-center" id="modal-editar">
    <div class="form-cont d-flex justify-content-center bg-primary br-4 p-4 gap-2">
        <form class="d-flex flex-column gap-2 p-2">
            <div class="form-header d-flex justify-content-end ">
                <i class="fa-solid fa-xmark h3 cerrar" id="cerrar-editar"></i>
            </div>
            <span class="text-white text-center h4">Editar producto </span>

            <label for="productoEditar" class="text-white d-flex justify-content-between gap-4">Nombre del producto:
                <input type="text" id="productoEditar">
            </label>


            <label for="talleEditar" class="d-none text-white d-flex justify-content-between gap-4" id="labelTalle"> Talle: 
                <select id="talleEditar">
                    <?php
                    $talles=$con->query("SELECT * FROM talles");
                    while ($row=$talles->fetch_object()){
                        echo ' <option value="'.$row->id_talles.'">'.$row->talle_tipo1.'/'.$row->talle_tipo2.'/'.$row->talle_tipo3.'</option>';
                    }
                    ?>
                </select>
            </label>


            <label for="colorEditar" class="d-none text-white d-flex justify-content-between gap-4" id="labelColor"> Color: 
                <select id="colorEditar">
                    <?php
                    $colores=$con->query("SELECT * FROM colores");
                    while ($row=$colores->fetch_object()){
                        echo ' <option value="'.$row->id_colores.'">'.$row->colores.'</option>';
                    }
                    ?>
                </select>
            </label>


            <label for="stockEditar" class="text-white d-flex justify-content-between">Stock del producto: 
                <input type="number" id="stockEditar">
            </label>
<div class="d-flex justify-content-center">
    <input type="submit" value="Guardar modificaciones" class="btn btn-warning w-300" id="enviarEditar">
</div>
        </form>
    </div>
</div>
