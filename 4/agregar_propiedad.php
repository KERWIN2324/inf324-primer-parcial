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



<?php
include('con_bd.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $zona = $_POST['zona'];
    $xinicial = $_POST['xinicial'];
    $yinicial = $_POST['yinicial'];
    $xfinal = $_POST['xfinal'];
    $yfinal = $_POST['yfinal'];
    $superficie = $_POST['superficie'];
    $propietario = $_POST['propietario'];
    $distrito = $_POST['distrito'];

    $conn->query("INSERT INTO propiedad (id,zona, xinicial, yinicial, xfinal, yfinal, superficie, propetario, distrito) 
                  VALUES ('$id','$zona', '$xinicial', '$yinicial', '$xfinal', '$yfinal', '$superficie', '$propietario', '$distrito')");

    echo "<script>
        alert('Propiedad agregada correctamente.');
        window.location.href = 'admin.php';
    </script>";
}
?>


<div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder">AGREGAR PROPIETARIO</h1>
            <p class="lead fw-normal text-muted mb-0">Ingrese los datos del propietario</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <form  method="POST">
                    <div class="form-floating mb-3">
                        <input class="form-control" type="number" name="id" placeholder="Id" required />
                        <label for="name">Ingrese el Id</label>         
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="zona" placeholder="Zona" required />
                        <label for="name">Ingrese la Zona</label>         
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="number" name="xinicial" placeholder="X Inicial" step="1" required />
                        <label for="name">Ingrese la X Inicial</label>         
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="number" name="yinicial" placeholder="Y Inicial" step="1" required />
                        <label for="name">Ingrese la Y Inicial</label>         
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="number" name="xfinal" placeholder="X Final" step="1" required />
                        <label for="name">Ingrese la X Final</label>         
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="number" name="yfinal" placeholder="Y Final" step="1" required />
                        <label for="name">Ingrese la Y Final</label>         
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="number" name="superficie" placeholder="Superficie" step="1" required />
                        <label for="name">Ingrese la Superficie</label>         
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="propietario" placeholder="Propietario" required />
                        <label for="name">Ingrese el Propietario</label>         
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="distrito" placeholder="Distrito" required />
                        <label for="name">Ingrese el Distrito</label>         
                    </div>
                    <div class="d-grid"><button class="btn btn-outline-dark "  type="submit">Agregar Propietario</button></div>
                </form>
            </div>
        </div>
    </div>

<?php include "pie_pagina.php"; ?> 
