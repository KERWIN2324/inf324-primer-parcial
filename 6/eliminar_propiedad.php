<?php
include('con_bd.php');

$id = $_POST['id'];

$conn->query("DELETE FROM propiedad WHERE id=$id");

echo "<script>
    alert('Propiedad eliminada correctamente.');
    window.location.href = 'admin.php';
</script>";
?>
