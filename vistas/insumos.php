<main class="min-h-100 h-75  p-2 mt-5 d-none" id="productosInsumos">
  <h1 class="text-light text-center">INSUMOS</h1>
<section class=" articulos-contenedor container-fluid d-flex flex-column bg-light h-100 max-h-100p p-2 br-4" >
    
      <div class="articulos-contenedor container-fluid p-4 h-100">


        <?php


  while ($row=$productos_insumos->fetch_object()){
      echo '<article>';
      echo '<h2>'.$row->productos.'</h2>';
      echo '<h2>'.$row->categorias.'</h2>';
      echo '<img src="./assets/perfil.jpg">';
      echo '<h3>Stock: '.$row->stock.'</h3>';
      echo '</article>';
  }     
        ?>


      </div>
    </section>
</main>