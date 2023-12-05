<?php
    session_start();            //Siempre en la primera línea de código
    $_SESSION['nombre']='Iker';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones 1/2</title>
</head>
<body>
<h1>Home</h1>
<p></p>
    <a href="abrir.php">Abrir sesión</a>
</body>
</html>