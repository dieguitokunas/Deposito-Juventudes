<?php
require './db/conn.php';


$productos_tecnologia=$con->query("SELECT * FROM productos_tecnologia p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");
$productos_tecnologia2=$con->query("SELECT * FROM productos_tecnologia p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");


$productos_indumentaria=$con->query("SELECT * FROM categorias AS ca JOIN productos_indumentaria AS p  ON ca.id_categoria=p.id_categoria 
 JOIN colores AS co ON p.id_color=co.id_colores
 JOIN talles AS t ON p.id_talle=t.id_talles
");




$productos_kit_escolar=$con->query("SELECT * FROM productos_kit_escolar p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");



$productos_donaciones=$con->query("SELECT * FROM productos_donaciones p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");


$productos_libreria=$con->query("SELECT * FROM productos_libreria p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");



$productos_herramientas=$con->query("SELECT * FROM productos_herramientas p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");


$productos_comunicacion=$con->query("SELECT * FROM productos_comunicacion p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");


$productos_diversion=$con->query("SELECT * FROM productos_diversion p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");


$productos_insumos=$con->query("SELECT * FROM productos_insumos p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");


?>