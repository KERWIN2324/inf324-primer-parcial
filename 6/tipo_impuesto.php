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
        <a class="navbar-brand" href="admin.php">VOLVER</a>
    </div>
</nav>

    <h2 class="fw-bolder" style="text-align: center; padding: 40px;" >CANTIDAD DE PROPIEDADES POR TIPO DE IMPUESTOS</h2> 


    <?php
    include('con_bd.php');

   
    
    $query = "
    SELECT
        SUM(CASE WHEN LEFT(id, 1) = '1' THEN 1 ELSE 0 END) AS impuestos_altos,
        SUM(CASE WHEN LEFT(id, 1) = '2' THEN 1 ELSE 0 END) AS impuestos_medios,
        SUM(CASE WHEN LEFT(id, 1) = '3' THEN 1 ELSE 0 END) AS impuestos_bajos
    FROM propiedad ";


$result = $conn->query($query);

if ($row = $result->fetch_assoc()) {
    $impuestos_altos = $row['impuestos_altos'];
    $impuestos_medios = $row['impuestos_medios'];
    $impuestos_bajos = $row['impuestos_bajos'];
}

    echo "<table class='table table-bordered' style='width: 1200px; margin-left: auto; margin-right: auto; border: 2px; text-align: center; vertical-align: middle;'>";
    echo "<thead ><tr><th style=' color: white; background-color: #dc3a1e;' >IMPUESTOS ALTOS</th><th  style='background-color: #fff224; '>IMPUESTOS MEDIOS</th><th  style='background-color: lightgreen;  '>IMPUESTOS BAJOS</th></tr></thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td style='font-size: 35px'>" . $impuestos_altos . "</td>";
    echo "<td style='font-size: 35px'>" . $impuestos_medios . "</td>";
    echo "<td style='font-size: 35px'>" . $impuestos_bajos . "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table> </br></br></br>";
    ?>

<?php include "pie_pagina.php"; ?> 
