<?php
require './conn.php';

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
$idCategoria=$_POST["idCategoria"];
$idProducto=$_POST["idProducto"];
$nombreCategoria = $todasCategorias[$idCategoria] ?? "";
$id="id_".$nombreCategoria;

$sql=$con->prepare("DELETE FROM $nombreCategoria WHERE $id=?");
$sql->bind_param("i",$idProducto);
$sql->execute();
?>