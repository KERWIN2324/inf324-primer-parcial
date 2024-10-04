<?php
include('con_bd.php');

$ci = $_POST['ci'];

$conn->query("DELETE FROM persona WHERE ci=$ci");

echo "<script>
    alert('Persona eliminada correctamente.');
    window.location.href = 'usuario.php';
</script>";
?>