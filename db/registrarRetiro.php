<?php

require './conn.php';
$categoria = $_POST["categoria"];
$producto = $_POST["producto"];
$cantidad = $_POST["cantidad"];
if ($cantidad<10){
    $cantidad = "0".$cantidad;
}
$descripcion = $_POST["descripcion"];
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
$nombreCategoria = $todasCategorias[$categoria] ?? "";
$selectStock = $con->query("SELECT stock FROM $nombreCategoria");
$selectStock = $selectStock->fetch_object();
$stockActual = $selectStock->stock;
$stock = $stockActual - $cantidad;
$id = "id_" . $nombreCategoria;
$response = $cantidad;
if ($stock > 0) {
    $actualizarStock = $con->prepare("UPDATE $nombreCategoria SET stock = ? WHERE $id=$producto");
    $actualizarStock->bind_param("i", $stock);
    $actualizarStock->execute();
    // $response = "updated";
} else {
    $borrarProducto = $con->prepare("DELETE FROM $nombreCategoria WHERE $id=?");
    $borrarProducto->bind_param("s", $producto);
    $borrarProducto->execute();
    // $response = "deleted";
}
$sql = $con->prepare("INSERT INTO retiros (id_categoria,producto,cantidad_retirada,descripcion) VALUES (?,?,?,?)");
$sql->bind_param("isis", $categoria, $producto, $cantidad, $descripcion);
$sql->execute();
echo $response;
