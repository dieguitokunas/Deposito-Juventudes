<div class="modal d-none position-fixed w-100 h-100  d-flex justify-content-center align-items-center " id="modal-retiro">
    <div class="min-w-f form-cont d-flex justify-content-center bg-primary br-4 p-4 gap-2">

      <form action="" class="text-white form-retiro d-flex flex-column   gap-2">
        <div class="form-header align-self-end ">
          <i class="fa-solid fa-xmark h3 cerrar" id="cerrar-retiro"></i>
        </div>
        <center><span class="text-light h4">Retiro de productos</span></center>

        <select name="" id="retiroCategoria" class="w-100">
          <option value="">Categoría del producto</option>
          <?php
          $categorias=$con->query("SELECT * FROM categorias");

          while ($row=$categorias->fetch_object()){
            echo '<option value="'.$row->categorias.'">'.$row->categorias.'</option>';
          }
          ?>

        </select>
        <select name="" id="retiroProducto" class="w-100">
          <option value="">Producto</option>
        </select>
        <div class="d-flex justify-content-between align-items-center">  
          <label for="stockRetiro">Stock disponible: </label>
          <span id="stockRetiro">10</span>
        </div>
        <div class="d-flex justify-content-between">
          <span>Cantidad a retirar:</span>
          <input class="w-50p" type="number" name="" id="" min="1" max="10" inputmode="numeric">
        </div>
        <input type="submit" class="w-50 align-self-center btn btn-danger" value="Registrar retiro">
      </form>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded",function(){
      const categoria=document.getElementById("retiroCategoria")
      const producto=document.getElementById("retiroProducto")
      
      categoria.addEventListener("change",function(){
        producto.innerHTML=""
        let catval=categoria.value  

        fetch('./db/obtenerProductos.php',{
          method:'POST',
          headers:{
        'Content-Type': 'application/x-www-form-urlencoded',
      },
          body:'categoria='+encodeURIComponent(catval)
        }).then(response=>response.json())
        .then(productos=>{

            productos.forEach(p=>{
            let options = document.createElement("option");
            options.value = p.id;
            options.text = p.producto;
            producto.add(options);
          
            })
        })
      })
      })

      //Dejo la misma solicitud pero en AJAX como recordatorio

    // const xhr= new XMLHttpRequest()
    // xhr.open("POST",'./db/obtenerProductos.php?categoria='+ catval,true)
    // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    // xhr.onload =function(){

    //   let productos=JSON.parse(xhr.responseText)
    //   console.log(productos)

    //   productos.forEach(function(p){
    //     let option=document.createElement("option")
    //     option.value=p.id
    //     option.text=p.producto
    //     producto.add(option)  
    //   })


    // }
    // xhr.send('categoria=' + encodeURIComponent(catval))


      </script>
