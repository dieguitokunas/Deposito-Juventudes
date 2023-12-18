<?php
require './conn.php';

$producto = $_POST["producto"];
$idCategoria = $_POST["categoria"];
$cantidad = $_POST["cantidad"];
$idTalle = $_POST["talle"];
$idColor = $_POST["color"];
$tablaProducto = strtolower("productos_tecnologia");
$nombreCategoria = "";

$todasCategorias = [
    1 => "productos_tecnologia",
    2 => "productos_indumentaria",
    3 => "productos_kit_escolar",
    4 => "productos_donaciones",
    5 => "productos_libreria",
    6 => "productos_herramientas",
    7 => "productos_comunicacion",
    8 => "productos_diversion",
    9 => "productos_insumos"
];
$nombreCategoria = $todasCategorias[$idCategoria] ?? "";

$response = "";

if ($idCategoria === "2") {
    $sql = $con->prepare("INSERT INTO $nombreCategoria (id_categoria,productos,id_talle,id_color,stock) VALUES (?,?,?,?,?)");
    $sql->bind_param("isiii", $idCategoria, $producto, $idTalle, $idColor, $cantidad);
} else {
    $sql = $con->prepare("INSERT INTO $nombreCategoria (id_categoria,productos,stock) VALUES (?,?,?)");
    $sql->bind_param("isi", $idCategoria, $producto, $cantidad);
}

if ($sql->execute()) {
    $response = "true";
} else {
    $response = "false";
}
$sql->close();
echo $response;
