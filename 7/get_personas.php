<?php
$conexion = new mysqli("localhost", "root", "", "bdkerwin");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$distrito = $conexion->real_escape_string($_GET['distrito']);
$zona = $conexion->real_escape_string($_GET['zona']);

$sql = "
    SELECT p.ci, p.nombre, p.paterno, p.materno, p.telefono 
    FROM persona p, propiedad pp
    WHERE p.ci = pp.propetario
    AND pp.distrito = '$distrito' AND pp.zona = '$zona'";

$resultado = $conexion->query($sql);


$filas = "";
if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $filas .= "<tr>
                    <td>{$fila['ci']}</td>
                    <td>{$fila['nombre']}</td>
                    <td>{$fila['paterno']}</td>
                    <td>{$fila['materno']}</td>
                    <td>{$fila['telefono']}</td>
                   </tr>";
    }
} else {
    $filas = "<tr><td colspan='5'>No se encontraron personas</td></tr>";
}

echo $filas;
$conexion->close();
?>
