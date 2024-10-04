<?php
$conexion = new mysqli("localhost", "root", "", "bdkerwin");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$distrito = $_GET['distrito'];
$sql = "SELECT DISTINCT zona FROM propiedad WHERE distrito = '$distrito'";
$resultado = $conexion->query($sql);

$options = "";
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        $options .= "<option value='" . $fila['zona'] . "'>" . $fila['zona'] . "</option>";
    }
}
echo $options;
$conexion->close();
?>
