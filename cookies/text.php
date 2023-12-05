<?php
    if(isset($_COOKIE['font-size'])){
        $tamanio=$_COOKIE['font-size'];
    }else{
        $tamanio='30px';
    }
?>        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text</title>
    <style>
        p{
            font-size: <?php echo $tamanio?>;
        }
    </style>
</head>
<body>
    <h1>Texto</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium 
        quibusdam magnam dolor, consequuntur dicta vel placeat eveniet alias 
        facilis quia hic consequatur laboriosam atque reprehenderit, adipisci 
        distinctio excepturi iusto eligendi.
    </p>
</body>
</html>