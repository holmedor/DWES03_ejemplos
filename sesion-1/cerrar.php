<?php
    session_start();
    session_destroy();
    $index='http://localhost/DWES03/sesion-1/index.php';
    header('Location: '.$index);
?>