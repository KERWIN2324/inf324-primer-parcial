<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HAM-LP</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

        <nav class="navbar navbar-expand-lg" style="background-image: url(imagenes/LOGO.png) ; height: 250px; background-position: center; background-repeat: no-repeat;">    </nav>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 40px;">
    <div class="container px-5">
        <a class="navbar-brand" href="usuario.php">VOLVER</a>
    </div>
</nav>


<?php
include('con_bd.php');
$ci = $_GET['ci'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $xci = $_POST['ci'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];

    $conn->query("UPDATE persona SET ci='$xci', paterno='$paterno', materno='$materno', nombre='$nombre', telefono='$telefono' 
                 WHERE ci=$ci");

    echo "<script>
        alert('Persona actualizada correctamente.');
        window.location.href = 'usuario.php';
    </script>";
}

$result = $conn->query("SELECT * FROM persona WHERE ci=$ci");
$persona = $result->fetch_assoc();
?>

<div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder">EDITAR PERSONA</h1>
            <p class="lead fw-normal text-muted mb-0">Ingrese los Datos de la Persona</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <form  method="POST">
                    <div class="form-floating mb-3">
                        <input class="form-control"  type="number" name="ci" value="<?php echo $persona['ci']; ?>" required />
                        <label for="name">Ingrese el CI</label>         
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="paterno" value="<?php echo $persona['paterno']; ?>" required />
                        <label for="name">Ingrese el Apellido Paterno</label>         
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="materno" value="<?php echo $persona['materno']; ?>" required/>
                        <label for="name">Ingrese el Apellido Materno</label>         
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control"type="text" name="nombre" value="<?php echo $persona['nombre']; ?>" required />
                        <label for="name">Ingrese el Nombre</label>         
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control"  type="text" name="telefono" value="<?php echo $persona['telefono']; ?>" required />
                        <label for="name">Ingrese el Telefono</label>         
                    </div>

                    <div class="d-grid"><button class="btn btn-outline-dark "  type="submit">Actualizar</button></div>
                </form>
            </div>
        </div>
    </div>

<?php include "pie_pagina.php"; ?> 
