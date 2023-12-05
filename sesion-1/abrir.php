<?php
    session_start();
    if(isset($_SESSION['nombre'])){
        $nombre=$_SESSION['nombre'];
    }else{
        $nombre='';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
    <h1>Hola <?=$nombre?></h1>
    <a href="cerrar.php">Cerrar sesión</a> 
</body>
</html>