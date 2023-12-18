<?php

require './conn.php';
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

if (isset($_POST["categoria"]) && !empty($_POST["categoria"])) {
    $categoria = $_POST["categoria"];
    $nombreCategoria = $todasCategorias[$categoria];
    $id = "id_" . $nombreCategoria;
    $sql = $con->prepare("SELECT * FROM $nombreCategoria");
    $sql->execute();
    $respuestaCategoria = $sql->get_result();
    if ($respuestaCategoria->num_rows > 0) {
        while ($row = $respuestaCategoria->fetch_object()) {
            $respuestaSQL[] = array(
                'id' => $row->$id,
                'producto' => $row->productos,
                'stock' => $row->stock,
            );
        }
        echo json_encode($respuestaSQL);
    } else {
        $respuestaSQL[] = array('producto' => "No existen productos en esta categoría");
        echo json_encode($respuestaSQL);
    }
}
if (isset($_POST["producto"]) && !empty($_POST["producto"])) {
    $categoriaProducto = $_POST["categoriaProducto"];
    $productoProducto = $todasCategorias[$categoriaProducto];
    $idProducto = "id_" . $productoProducto;
    $productoEnviado = $_POST["producto"];
    $sqlProducto = $con->prepare("SELECT * FROM $productoProducto WHERE $idProducto = ?");
    $sqlProducto->bind_param("s", $productoEnviado);
    $sqlProducto->execute();
    $respuestaProducto = $sqlProducto->get_result();
    if ($respuestaProducto->num_rows > 0) {
        $row = $respuestaProducto->fetch_object();
        $respuesta = $row->stock;
    } else {
        $respuesta = 0;
    }
    echo json_encode($respuesta);
}
