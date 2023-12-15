<?php
require 'conn.php';
if (isset($_POST['tecnologia'])) {
    $productos_tecnologia = $con->query("SELECT * FROM productos_tecnologia p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");
    $tbodyTec = "";
    while ($row = $productos_tecnologia->fetch_object()) {
        $tbodyTec .= '<tr>';
        $tbodyTec .= '<td>' . $row->categorias . '</td>';
        $tbodyTec .= '<td>' . $row->productos . '</td>';
        $tbodyTec .= '<td>' . $row->stock . '</td>';
        $tbodyTec .= '<td><a class="btn bg-warning">Editar</a></td>';
        $tbodyTec .= '<td><a class="btn bg-danger">Eliminar</a></td>';
        $tbodyTec .= '</tr>';
    }
    echo $tbodyTec;
}

if (isset($_POST["indumentaria"])) {
    $tbodyInd="";
    $productos_indumentaria = $con->query("SELECT * FROM productos_indumentaria p INNER JOIN categorias cat ON
p.id_categoria=cat.id_categoria
JOIN colores co ON p.id_color=co.id_colores
JOIN talles ta ON p.id_talle=ta.id_talles ORDER BY id_productos_indumentaria
");
    while ($row = $productos_indumentaria->fetch_object()) {
        $tbodyInd.= '<tr>';
        $tbodyInd.= '<td>' . $row->categorias . '</td>';
        $tbodyInd.= '<td>' . $row->productos . '</td>';
        $tbodyInd.= '<td><strong>' . $row->talle_tipo1 .'</strong>/<strong>'.$row->talle_tipo2.'</strong>/<strong>'.$row->talle_tipo3 .'</strong></td>';
        $tbodyInd.= '<td>' . $row->colores . '</td>';
        $tbodyInd.= '<td>' . $row->stock . '</td>';
        $tbodyInd.= '<td><a class="btn bg-warning">Editar</a></td>';
        $tbodyInd.= '<td><a class="btn bg-danger">Eliminar</a></td>';
        $tbodyInd.= '</tr>';
    }
    echo $tbodyInd;
}



if(isset($_POST["kit"])){
    $productos_kit_escolar=$con->query("SELECT * FROM productos_kit_escolar p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");
    $tbodyKit="";
    while ($row = $productos_kit_escolar->fetch_object()) {
        $tbodyKit.= '<tr>';
        $tbodyKit.= '<td>' . $row->categorias . '</td>';
        $tbodyKit.= '<td>' . $row->productos . '</td>';
        $tbodyKit.= '<td>' . $row->stock . '</td>';
        $tbodyKit.= '<td><a class="btn bg-warning">Editar</a></td>';
        $tbodyKit.= '<td><a class="btn bg-danger">Eliminar</a></td>';
        $tbodyKit.= '</tr>';
    }
    echo $tbodyKit;
}

if(isset($_POST["donaciones"])){

    $productos_donaciones=$con->query("SELECT * FROM productos_donaciones p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");
    $tbodyDon="";
    while($row=$productos_donaciones->fetch_object()){
        $tbodyDon.="<tr>";
        $tbodyDon.="<td>".$row->categorias."</td>";
        $tbodyDon.="<td>".$row->productos."</td>";
        $tbodyDon.="<td>".$row->stock."</td>";
        $tbodyDon.= '<td><a class="btn bg-warning">Editar</a></td>';
        $tbodyDon.= '<td><a class="btn bg-danger">Eliminar</a></td>';
        $tbodyDon.="</tr>";
    }
    echo $tbodyDon;
}
if(isset($_POST["libreria"])){
    $productos_libreria=$con->query("SELECT * FROM productos_libreria p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");
    $tbodyLib="";
    while($row=$productos_libreria->fetch_object()){
        $tbodyLib.="<tr>";
        $tbodyLib.="<td>".$row->categorias."</td>";
        $tbodyLib.="<td>".$row->productos."</td>";
        $tbodyLib.="<td>".$row->stock."</td>";
        $tbodyLib.= '<td><a class="btn bg-warning">Editar</a></td>';
        $tbodyLib.= '<td><a class="btn bg-danger">Eliminar</a></td>';
        $tbodyLib.="</tr>";
    }
    echo $tbodyLib;

}


if(isset($_POST["herramientas"])){

    $productos_herramientas=$con->query("SELECT * FROM productos_herramientas p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");
    $tbodyHer="";
    while ($row=$productos_herramientas->fetch_object()){
        $tbodyHer.="<tr>";
        $tbodyHer.="<td>".$row->categorias."</td>";
        $tbodyHer.="<td>".$row->productos."</td>";
        $tbodyHer.="<td>".$row->stock."</td>";
        $tbodyHer.= '<td><a class="btn bg-warning">Editar</a></td>';
        $tbodyHer.= '<td><a class="btn bg-danger">Eliminar</a></td>';
        $tbodyHer.="</tr>";
    }
    echo $tbodyHer;
}
if(isset($_POST["comunicaciones"])){
    $productos_comunicacion=$con->query("SELECT * FROM productos_comunicacion p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");
    $tbodyCom="";
    while ($row=$productos_comunicacion->fetch_object()){
        $tbodyCom.="<tr>";
        $tbodyCom.="<td>".$row->categorias."</td>";
        $tbodyCom.="<td>".$row->productos."</td>";
        $tbodyCom.="<td>".$row->stock."</td>";
        $tbodyCom.= '<td><a class="btn bg-warning">Editar</a></td>';
        $tbodyCom.= '<td><a class="btn bg-danger">Eliminar</a></td>';
        $tbodyCom.="</tr>";
    }
    echo $tbodyCom;
}
if(isset($_POST["diversion"])){
    $productos_diversion=$con->query("SELECT * FROM productos_diversion p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");
    $tbodyDiv="";
    while ($row=$productos_diversion->fetch_object()){
        $tbodyDiv.="<tr>";
        $tbodyDiv.="<td>".$row->categorias."</td>";
        $tbodyDiv.="<td>".$row->productos."</td>";
        $tbodyDiv.="<td>".$row->stock."</td>";
        $tbodyDiv.= '<td><a class="btn bg-warning">Editar</a></td>';
        $tbodyDiv.= '<td><a class="btn bg-danger">Eliminar</a></td>';
        $tbodyDiv.="</tr>";
    }
    echo $tbodyDiv;
}

if (isset($_POST["insumos"])){
    $productos_insumos=$con->query("SELECT * FROM productos_insumos p INNER JOIN categorias c ON p.id_categoria=c.id_categoria");
    $tbodyIns="";
    while ($row=$productos_insumos->fetch_object()){
        $tbodyIns.="<tr>";
        $tbodyIns.="<td>".$row->categorias."</td>";
        $tbodyIns.="<td>".$row->productos."</td>";
        $tbodyIns.="<td>".$row->stock."</td>";
        $tbodyIns.= '<td><a class="btn bg-warning">Editar</a></td>';
        $tbodyIns.= '<td><a class="btn bg-danger">Eliminar</a></td>';
        $tbodyIns.="</tr>";
    }
    echo $tbodyIns;
}
