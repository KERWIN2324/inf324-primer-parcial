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

<h2 class="fw-bolder" style="text-align: center; padding: 40px;" >PERSONAS</h2>
<table class="table table-bordered" style="width: 1200px; margin-left: auto; margin-right: auto; border: 2px; text-align: center; vertical-align: middle;">
    <tr>
        <th>CI</th>
        <th>Paterno</th>
        <th>Materno</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Eliminar</th>
        <th>Modificar</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM persona");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['ci'] . "</td>";
        echo "<td>" . $row['paterno'] . "</td>";
        echo "<td>" . $row['materno'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['telefono'] . "</td>";
        echo "<td>
            <form action='eliminar_persona.php' method='POST' onsubmit='return confirmDelete()'>
                    <input type='hidden' name='ci' value='" . $row['ci'] . "'>
                    <button type='submit' class='btn btn-outline-dark'>Eliminar</button>
                </form>
          </td>";
        echo "<td> <form action='editar_persona.php' method='GET'>
                    <input type='hidden' name='ci' value='" . $row['ci'] . "'>
                    <button type='submit' class='btn btn-outline-dark'>Modificar</button>
                </form></td>";
        echo "</tr>";
    }
    ?>
</table>

</br>

<div style="text-align: center;">
    <a href="agregar_persona.php"><button class='btn btn-outline-dark'>Agregar Persona</button></a>
</div>

</br></br></br>

<?php include "pie_pagina.php"; ?> 
        