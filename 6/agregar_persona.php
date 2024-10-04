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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ci = $_POST['ci'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];

    $conn->query("INSERT INTO persona (ci, paterno, materno, nombre, telefono) 
                  VALUES ('$ci', '$paterno', '$materno', '$nombre', '$telefono')");

    echo "<script>
        alert('Persona agregada correctamente.');
        window.location.href = 'usuario.php';
    </script>";
}
?>

            
<div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
    <div class="text-center mb-5">
        <h1 class="fw-bolder">AGREGAR PERSONA</h1>
        <p class="lead fw-normal text-muted mb-0">Ingrese los datos de la persona</p>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-8 col-xl-6">
            <form  method="POST">
                <div class="form-floating mb-3">
                    <input class="form-control" type="number" name="ci" placeholder="CI" required />
                    <label for="name">Ingrese el Id</label>         
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="paterno" placeholder="Paterno" required />
                    <label for="name">Ingrese el Apellido Paterno</label>         
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="materno" placeholder="Materno" required />
                    <label for="name">Ingrese el Apellido Materno</label>         
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="nombre" placeholder="Nombre" required />
                    <label for="name">Ingrese el Nombre</label>         
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="telefono" placeholder="Teléfono" required />
                    <label for="name">Ingrese el Telefono</label>         
                </div>
                <div class="d-grid"><button class="btn btn-outline-dark "  type="submit">Agregar Persona</button></div>
            </form>
        </div>
    </div>
</div>

<?php include "pie_pagina.php"; ?> 