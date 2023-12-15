<div class="modal d-none position-fixed w-100 h-100  d-flex justify-content-center align-items-center " id="modal-retiro">
    <div class="min-w-f form-cont d-flex justify-content-center bg-primary br-4 p-4 gap-2">

      <form class="text-white form-retiro d-flex flex-column  h-f gap-2">
        <div class="form-header align-self-end ">
          <i class="fa-solid fa-xmark h3 cerrar" id="cerrar-retiro"></i>
        </div>
        <center><span class="text-light h4">Retiro de productos</span></center>

        <div class="d-flex justify-content-between align-items-center">
          <label for="retiroCategoria">Categoría: </label>
          <select name="" id="retiroCategoria" class="w-f">
            <option value="">Categoría</option>
            <?php
          $categorias=$con->query("SELECT * FROM categorias");
          
          while ($row=$categorias->fetch_object()){
            echo '<option value="'.$row->id_categoria.'">'.$row->categorias.'</option>';
          }
          ?>

</select>
</div>
          <div class="d-flex justify-content-between align-items-center">
<label for="retiroProducto">Producto: </label>
            <select name="retiroProducto" id="retiroProducto" class="w-f w-100p">
              <option value="99999">Producto</option>
            </select>
          </div>
        <div class="d-flex justify-content-between align-items-center">  
          <label for="stockRetiro">Stock disponible: </label>
          <span id="stockRetiro"></span>
        </div>
        <div class="d-flex justify-content-between">
          <label for="retiroCantidad">Cantidad a retirar:</label>
          <input class="w-50p" type="text" name="" id="retiroCantidad" min="1" inputmode="numeric">
        </div>
        <div class="alert bg-warning text-white text-center d-none" id="alertRetiroWarning">
          <span>Ingrese una cantidad valida</span>
        </div>
        <div class="alert bg-danger text-center text-white d-none" id="alertRetiroError">
          <span>Hubo un problema al realizar el retiro</span>
        </div>
        <div class="alert bg-success text-center text-white d-none" id="alertRetiroSuccess">
          <span>Retiro registrado con exito</span>
        </div>
        <label for="retiroDescripcion " class="d-flex align-items-center gap-4" > Descripcion: 
          <textarea  id="retiroDescripcion"></textarea>
        </label>
        <input type="submit" class="w-50 align-self-center btn btn-danger" value="Registrar retiro" id="registrarRetiro">
      </form>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded",function(){
      const categoria=document.getElementById("retiroCategoria")
      const producto=document.getElementById("retiroProducto")
      const descripcion=document.getElementById("retiroDescripcion")
      const cantidad=document.getElementById("retiroCantidad")
      const stockRetiro=document.getElementById("stockRetiro")
      const alertRetiroWarning=document.getElementById("alertRetiroWarning")
      const alertRetiroError=document.getElementById("alertRetiroError")
      const alertRetiroSuccess=document.getElementById("alertRetiroSuccess")
      const registrarRetiro=document.getElementById("registrarRetiro")
      let stockMaximo=0
      retiroCantidad.readOnly=true

      categoria.addEventListener("change",function(){
          let catval=categoria.value  
          producto.innerHTML="<option>Productos "+catval+"</option>"
        

        fetch('./db/obtenerProductos.php',{
          method:'POST',
          headers:{
        'Content-Type': 'application/x-www-form-urlencoded',
      },
          body:'categoria='+encodeURIComponent(catval)
        }).then(response=>response.json())
        .then(productos=>{

            productos.forEach(p=>{
            let options = document.createElement("option")
            options.value = p.id
            options.text = p.producto
            producto.add(options)

            })
        })
      })

      producto.addEventListener("change",function(){
        let catval=categoria.value
        let prodval=producto.value
        fetch('./db/obtenerProductos.php',{
          method:'POST',
          headers:{
        'Content-Type': 'application/x-www-form-urlencoded',
      },
          body:'producto='+encodeURIComponent(prodval)+"&categoriaProducto="+encodeURIComponent(catval)
        }).then(response=>response.json())
        .then(data=>{
          stockRetiro.textContent=data
          cantidad.setAttribute("max",data)
           stockMaximo=data

           if (data>0){
             cantidad.readOnly=false
           }
        })
      })
      
      retiroCantidad.addEventListener("input",function(){
        if (retiroCantidad.value>stockMaximo || retiroCantidad.value<=0){
          alertRetiroWarning.classList.remove("d-none")
          alertRetiroWarning.classList.add("d-block")
          retiroCantidad.value=retiroCantidad.value.slice(0,-1)
        }else{
          alertRetiroWarning.classList.remove("d-block")
          alertRetiroWarning.classList.add("d-none")
        }
      })

      registrarRetiro.addEventListener("click",function(e){
        e.preventDefault()
        let retiroCategoria=categoria.value
        let retiroProducto=producto.value
        let retiroCantidad=cantidad.value
        let retiroDescripcion=descripcion.value
        let data=new FormData()

        data.append("categoria",retiroCategoria)
        data.append("producto",retiroProducto)
        data.append("cantidad",retiroCantidad)
        data.append("descripcion",retiroDescripcion)
        fetch('db/registrarRetiro.php',{
          method:"POST",
          body:data,
        }).then(response=>response.text())
        .then(data=>{
          console.log(data)
          if (data){
            alertRetiroSuccess.classList.add("d-block")
            alertRetiroSuccess.classList.remove("d-none")
            alertRetiroError.classList.remove("d-block")
            alertRetiroError.classList.add("d-none")
          }else{
            alertRetiroSuccess.classList.remove("d-block")
            alertRetiroSuccess.classList.add("d-none")
            alertRetiroError.classList.add("d-block")
            alertRetiroError.classList.remove("d-none")

          }
        })
      })
      })


      </script>
