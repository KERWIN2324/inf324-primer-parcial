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
        <a class="navbar-brand" href="seccion.php">VOLVER</a>
    </div>
</nav>

<?php
session_start();
include('con_bd.php');

$username = $_SESSION['password'];

if ($_SESSION['rol'] == 'usuario') {
    $result_persona = $conn->query("SELECT * FROM persona WHERE ci='$username'");
    $persona = $result_persona->fetch_assoc();

    $result_propiedades = $conn->query("SELECT * FROM propiedad WHERE propetario='$username'");
}
?>


<div >
    <h2 class="fw-bolder" style="text-align: center; padding: 40px;" >SUS DATOS</h2>
    <?php if ($_SESSION['rol'] == 'usuario' && $persona): ?>
        <table class="table table-bordered" style="width: 1200px; margin-left: auto; margin-right: auto; border: 2px; text-align: center; vertical-align: middle;">
            <thead>
                <tr>
                    <th>CI</th>
                    <th>Paterno</th>
                    <th>Materno</th>
                    <th>Nombres</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td><?php echo $persona['ci']; ?></td>
                        <td><?php echo $persona['paterno']; ?></td>
                        <td><?php echo $persona['materno']; ?></td>
                        <td><?php echo $persona['nombre']; ?></td>
                        <td><?php echo $persona['telefono']; ?></td>
                    </tr>

            </tbody>
        </table>
        
        <h2 class="fw-bolder" style="text-align: center; padding: 40px;" >SUS PROPIEDADES</h2>
        <table class="table table-bordered" style="width: 1200px; margin-left: auto; margin-right: auto; border: 2px; text-align: center; vertical-align: middle;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Zona</th>
                    <th>Superficie</th>
                    <th>Distrito</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($result_propiedades->num_rows > 0): ?>
                <?php while ($row = $result_propiedades->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['zona']; ?></td>
                        <td><?php echo $row['superficie']; ?></td>
                        <td><?php echo $row['distrito']; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No hay propiedades asociadas a esta persona.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No se encontró información del usuario.</p>
    <?php endif; ?>
</div>

</br>

<?php include "pie_pagina.php"; ?> 

