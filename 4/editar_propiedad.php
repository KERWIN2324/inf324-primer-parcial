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
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $zona = $_POST['zona'];
    $xinicial = $_POST['xinicial'];
    $yinicial = $_POST['yinicial'];
    $xfinal = $_POST['xfinal'];
    $yfinal = $_POST['yfinal'];
    $superficie = $_POST['superficie'];
    $propietario = $_POST['propietario'];
    $distrito = $_POST['distrito'];

    $conn->query("UPDATE propiedad SET zona='$zona', xinicial='$xinicial', yinicial='$yinicial', 
                 xfinal='$xfinal', yfinal='$yfinal', superficie='$superficie', 
                 propetario='$propietario', distrito='$distrito' WHERE id=$id");

    echo "<script>
        alert('Propiedad actualizada correctamente.');
        window.location.href = 'admin.php';
    </script>";
}

$result = $conn->query("SELECT * FROM propiedad WHERE id=$id");
$propiedad = $result->fetch_assoc();
?>

<div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
    <div class="text-center mb-5">
        <h1 class="fw-bolder">EDITAR PROPIETARIO</h1>
        <p class="lead fw-normal text-muted mb-0">Ingrese los datos del propietario</p>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-8 col-xl-6">
            <form  method="POST">
                <div class="form-floating mb-3">
                    <input class="form-control"  type="text" name="zona" value="<?php echo $propiedad['zona']; ?>" required />
                    <label for="name">Ingrese la Zona</label>         
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="number" name="xinicial" value="<?php echo $propiedad['xinicial']; ?>" step="1" required />
                    <label for="name">Ingrese la X Inicial</label>         
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="number" name="yinicial" value="<?php echo $propiedad['yinicial']; ?>" step="1" required />
                    <label for="name">Ingrese la Y Inicial</label>         
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="number" name="xfinal" value="<?php echo $propiedad['xfinal']; ?>" step="1" required />
                    <label for="name">Ingrese la X Final</label>         
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control"  type="number" name="yfinal" value="<?php echo $propiedad['yfinal']; ?>" step="1" required />
                    <label for="name">Ingrese la Y Final</label>         
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="number" name="superficie" value="<?php echo $propiedad['superficie']; ?>" step="1" required />
                    <label for="name">Ingrese la Superficie</label>         
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="propietario" value="<?php echo $propiedad['propetario']; ?>" required />
                    <label for="name">Ingrese el Propietario</label>         
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="distrito" value="<?php echo $propiedad['distrito']; ?>" required />
                    <label for="name">Ingrese el Distrito</label>         
                </div>
                <div class="d-grid"><button class="btn btn-outline-dark "  type="submit">Actualizar</button></div>
            </form>
        </div>
    </div>
</div>

<?php include "pie_pagina.php"; ?> 
