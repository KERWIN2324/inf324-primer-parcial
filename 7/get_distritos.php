<?php
$conexion = new mysqli("localhost", "root", "", "bdkerwin");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT DISTINCT distrito FROM propiedad";
$resultado = $conexion->query($sql);

$options = "";
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        $options .= "<option value='" . $fila['distrito'] . "'>" . $fila['distrito'] . "</option>";
    }
}
echo $options;
$conexion->close();
?>
