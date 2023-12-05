<?php
    session_start();            //Siempre en la primera línea de código

    $_SESSION['miSesion']=array();
    $_SESSION['miSesion']['nombre']='Iker';


    $_SESSION['miSesion']['edad']='23';
    $_SESSION['miSesion']['ciudad']='Bilbao';

    echo '<pre>';
    echo var_dump($_SESSION['miSesion']);
    echo '</pre>';

    unset($_SESSION['miSesion']);

    echo '<pre>';
    echo var_dump($_SESSION['miSesion']);
    echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones 2/2</title>
</head>
<body>
<h1>Home</h1>
<p></p>
    <a href="abrir.php">Abrir sesión</a>
</body>
</html>