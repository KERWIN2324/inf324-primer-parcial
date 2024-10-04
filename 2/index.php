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
        <a class="btn btn-outline-light btn-lg px-4" href="seccion.php">INICIAL SESION</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php">INICIO</a></li>
                <li class="nav-item"><a class="nav-link" href="mapa.php">MAPA CATASTRAL</a></li>
                <li class="nav-item"><a class="nav-link" href="normativa.php">NORMATIVA</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">FICHA CATASTRAL</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                        <li><a class="btn btn-outline-dark " href="ficha1.php">FICHA CATASTRAL TIPO A</a></li>
                        <li><a class="dropdown-item btn btn-outline-dark" href="ficha2.php">FICHA CATASTRAL TIPO B</a></li>
                        <li><a class="dropdown-item btn btn-outline-dark" href="ficha3.php">FICHA CATASTRAL TIPO C</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
    

<header class="bg-dark py-5">
    <div class="container px-5" >
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-1">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">Municipio de La Paz</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Autoridad Catastral Municipal</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="imagenes/foto_la_paz.jpg" style=" background-position: center; background-repeat: no-repeat;" /></div>
        </div>
    </div>
</header>

    
<div class="py-5 bg-light">
    <div class="container px-2 my-5">
        <div class="row gx-2 justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="text-center">
                    <div class="fs-4 mb-4 fst-italic">"Somos una institución pública municipal renovada, dinámica, transparente e incluyente, que brinda servicios públicos modernos, eficientes, ágiles y planificados, con concertación y participación ciudadana"</div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="py-5 bg-light" id="scroll-target">
    <div class="container px-2 my-2">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="imagenes/logo1.jpeg" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder" style="text-align: center;">MISION</h2>
                <p class="lead fw-normal text-muted mb-0" style="text-align: center;">Somos una institución pública municipal renovada, dinámica, transparente e incluyente, que brinda servicios públicos modernos, eficientes, ágiles y planificados, con concertación y participación ciudadana, impulsando una convivencia pacífica en búsqueda de una mejor calidad de vida de la población paceña por el Bien Común.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container px-2 my-2">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="imagenes/logo2.jpg" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder" style="text-align: center;">VISION</h2>
                <p class="lead fw-normal text-muted mb-0" style="text-align: center;">Ser una institución pública modelo de gestión municipal democrática, participativa, transparente, eficiente, innovadora y tecnológica, que dinamiza la economía, el desarrollo social y territorial; consolidando una La Paz saludable, productiva, competitiva, biodiversa y resiliente, cultural, ordenada e interconectada, con diálogo y reconciliación por el Bien Común.</p>
            </div>
        </div>
    </div>
    </section>

    <section class="py-5 bg-light">
        
    </section>

    <div class="container px-5 my-5">
    <div class="text-center">
        <h2 class="fw-bolder">Autoridades</h2>
        <p class="lead fw-normal text-muted mb-5">Autoridades principales de la ciudad de La Paz</p>
    </div>
    <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center"> 
        <div class="col mb-5 mb-5 mb-xl-0">
            <div class="text-center">
                <img class="img-fluid rounded-circle mb-4 px-4" src="imagenes/perfil1.jpeg" alt="..." />
                <h5 class="fw-bolder">Hernán Iván Arias Durán</h5>
                <div class="fst-italic text-muted">Alcalde Municipal de La Paz</div>
            </div>
        </div>
    </div>
    </div>
</section>

</br>

<?php include "pie_pagina.php"; ?>
