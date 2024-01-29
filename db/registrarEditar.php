<?php

require './conn.php';

$idCategoria=$_POST["categoria"];
$idProducto=$_POST["id"];
$producto=$_POST["producto"];
$stock=$_POST["stock"];


$nombreCategoria = "";
$todasCategorias = [
    1 => 'productos_tecnologia',
    2 => 'productos_indumentaria',
    3 => 'productos_kit_escolar',
    4 => 'productos_donaciones',
    5 => 'productos_libreria',
    6 => 'productos_herramientas',
    7 => 'productos_comunicacion',
    8 => 'productos_diversion',
    9 => 'productos_insumos'
];
$nombreCategoria = $todasCategorias[$idCategoria] ?? "";

$id="id_".$nombreCategoria;


if ($idCategoria===2){
    $talle=$_POST["talle"];
    $color=$_POST["color"];
    $sql=$con->prepare("UPDATE $nombreCategoria SET productos=?, stock=?,id_talle=?,id_color =? WHERE $id=?");
    $sql->bind_param("siiii",$producto,$stock,$talle,$color,$idProducto);
}else{
    $sql=$con->prepare("UPDATE $nombreCategoria SET productos=?, stock=? WHERE $id=?");
    $sql->bind_param("sii",$producto,$stock,$idProducto);
}

if($sql->execute()){
    $response="true";
}else{
    $response="false";
}

echo $response;

?>