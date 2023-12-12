<main class="min-h-100 h-75  p-2 mt-5 d-none" id="productosIndumentaria">
  <h1 class="text-light text-center">INDUMENTARIA</h1>
<section class=" articulos-contenedor container-fluid d-flex flex-column bg-light h-100 max-h-100p p-2 br-4" >
      
<table class="table table-hover " id="tablaTecnologia">
      <thead>
        <tr>
          <th>Categoria</th>
          <th>Producto</th>
          <th>Talles</th>
          <th>Colores</th>
          <th>Stock</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php
      while ($row=$productos_indumentaria->fetch_object()){
        echo '<tr>';
        echo '<td>'.$row->categorias.'</td>';
        echo '<td>'.$row->productos.'</td>';
        echo '<td>'.$row->talle_tipo1.'</td>';
        echo '<td>'.$row->colores.'</td>';
        echo '<td>'.$row->stock.'</td>';
        echo '<td><a class="btn bg-warning">Editar</a></td>';
        echo '<td><a class="btn bg-danger">Eliminar</a></td>';
        echo '</tr>';
      }
        ?>
      </tbody>
    </table>
    </section>
</main>