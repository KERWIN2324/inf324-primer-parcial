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


<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">INICIAL SESION</h1>
                <p class="lead fw-normal text-muted mb-0">Inicial sesion como administrador o cliente</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <form id="contactForm"  action="autenticar.php" method="POST">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" name="username" placeholder="Enter your name..." />
                            <label for="name">Ingrese su usuario</label>         
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="password" name="password"  placeholder="Enter your name..."/>
                            <label for="email">Ingrese su contraseña</label>
                        </div>
                        <div class="d-grid"><button class="btn btn-outline-dark " id="submitButton" type="submit">Iniciar Seccion</button></div>
                    </form>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>



<?php include "pie_pagina.php"; ?> 