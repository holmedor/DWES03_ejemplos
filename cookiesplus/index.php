<?php
$valor1="PRUEBA1";
$valor2="PRUEBA2";

if (!isset($_COOKIE['cookie1'])){
    setcookie("cookie1",$valor1);
}
if (!isset($_COOKIE['cookie2'])){
    setcookie("cookie2",$valor2,time()+60); //expira en un minuto
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio: Funcion header para autentificacion HTTP</title>
    <link href="dwes.css" rel="stylesheet" type="text/css">
</head>
<body>
    
<?php

if (isset($_GET['eliminar'])){
    setcookie("cookie1",$valor1, time()-2400);
    setcookie("cookie2",$valor2, time()-2400);
}

if (isset($_COOKIE['cookie1'])){
    echo("Cookie 1:".$_COOKIE['cookie1']."<br>");
}
if (isset($_COOKIE['cookie2'])){
    echo("Cookie 2:".$_COOKIE['cookie2']);
}

?>
<form action="index.php" method="GET">
    <button name="eliminar">Eliminar cookies</button>
</form>
</body> 
</html>