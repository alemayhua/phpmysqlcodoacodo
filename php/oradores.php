<?php
include "Conexion.php";
$conexionDB = new Conexion("localhost", "root", "", "codo_a_codo_php");

$conexion = $conexionDB->obtenerConexion();
$sql = "SELECT * FROM personas";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo '
        <div class="col">
            <div class="card h-100">
                <img class="card-img-top" src="' . $fila["foto"] . '" alt=' . $fila["nombre"] . '>
                <div class="card-body">
                <button type="button" class="btn btn-warning">' . $fila["provincia"] . '</button>
                <button type="button" class="btn btn-info text-white">Edad: ' . $fila["edad"] . '</button>
                <h5 class="card-title">' . $fila["nombre"] . ' ' . $fila["apellido"] . '</h5>
            </div>
        </div>
        </div>';
    }
}else{
    echo "<h1>NO HAY ORADORES</h1>";
}

$conexion->close();

?>