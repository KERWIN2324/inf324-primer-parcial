<?php
session_start();

$usuarios = [
    'admin' => ['password' => 'admin', 'rol' => 'admin'],
    'roman' => ['password' => '10072756', 'rol' => 'usuario'],
    'karla' => ['password' => '10072762', 'rol' => 'usuario'] ,
];

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($usuarios[$username]) && $usuarios[$username]['password'] == $password) {
    $_SESSION['usuario'] = $username;
    $_SESSION['rol'] = $usuarios[$username]['rol']; 
    $_SESSION['password'] = $password;
    
    if ($_SESSION['rol'] == 'admin') {
        header("Location: admin.php"); 
    } else {
        header("Location: ficha.php");
    }
    exit();
} else {
    echo "<script>
        alert('USUARIO O CONTRASEÑA INCORRECTA.');
        window.location.href = 'seccion.php';
    </script>";

}
?>


<?php include "pie_pagina.php"; ?> 
