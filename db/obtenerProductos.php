<?php

require './conn.php';

if (isset($_POST["categoria"])&&!empty($_POST["categoria"])){
    $categoria=$_POST["categoria"];
    $producto=strtolower('productos_'.$categoria);
    $id="id_".$producto;
    $sql=$con->query("SELECT * FROM $producto");

    if ($sql->num_rows>0){
        while ($row=$sql->fetch_object()){
            $respuestaSQL[]=array(
                'id'=>$id,
                'producto'=>$row->productos,
                'stock' =>$row->stock,
            );
        }
    }else{
        $respuestaSQL[]=array('producto'=>"No existen productos en esta categoría");
    }
    echo json_encode($respuestaSQL);
}

?>