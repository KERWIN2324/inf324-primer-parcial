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
        <a class="navbar-brand" href="index.php">CERRAR SESSION</a>
        <a class="navbar-brand" href="admin.php">ADMINISTRAR PROPIEDADES</a>
        <a class="navbar-brand" href="usuario.php">ADMINISTRAR CLIENTES</a> 
    </div>
</nav>


<?php include('con_bd.php'); ?>


<h2 class="fw-bolder" style="text-align: center; padding: 40px;" >PROPIEDADES</h2>
<table class="table table-bordered" style="width: 1200px; margin-left: auto; margin-right: auto; border: 2px; text-align: center; vertical-align: middle;">
    <tr>
        <th>ID</th>
        <th>Zona</th>
        <th>X Inicial</th>
        <th>Y Inicial</th>
        <th>X Final</th>
        <th>Y Final</th>
        <th>Superficie</th>
        <th>Propietario</th>
        <th>Distrito</th>
        <th>Eliminar</th>
        <th>Modificar</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM propiedad");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['zona'] . "</td>";
        echo "<td>" . $row['xinicial'] . "</td>";
        echo "<td>" . $row['yinicial'] . "</td>";
        echo "<td>" . $row['xfinal'] . "</td>";
        echo "<td>" . $row['yfinal'] . "</td>";
        echo "<td>" . $row['superficie'] . "</td>";
        echo "<td>" . $row['propetario'] . "</td>";
        echo "<td>" . $row['distrito'] . "</td>";
        echo "<td>
            <form action='eliminar_propiedad.php' method='POST' >
                <input type='hidden' name='id' value='" . $row['id'] . "'>
                <button type='submit' class='btn btn-outline-dark' >Eliminar</button>
            </form>
          </td>";
        echo "<td> <form action='editar_propiedad.php' method='GET'>
            <input type='hidden' name='id' value='" . $row['id'] . "'>
            <button type='submit' class='btn btn-outline-dark'>Modificar</button>
        </form></td>";
        echo "</tr>";
    }
    ?>
</table>

</br>

<div style="text-align: center;">
    <a href="agregar_propiedad.php"><button class='btn btn-outline-dark'>Agregar Propiedad</button></a>
</div>

</br></br></br>

<?php include "pie_pagina.php"; ?> 
        





