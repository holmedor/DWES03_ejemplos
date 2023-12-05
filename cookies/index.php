<?php
    setcookie("font-size","50px",time()+60*60*34*30);//1 mes de duración
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <h1>Cookies</h1>
    <p>Tananio de la fuente <?=$_COOKIE['font-size'];?></p>
</head>
<body>
    
</body>
</html>