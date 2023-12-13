<?php 
require_once 'includes/header.php';     //cabecera 
include 'includes/funciones.php';       //funciones

echo "<br>";
?>
    <h2>Crear nuevo MEDIO</h2>
<!--Aquí empieza el formulario-->
    <form action = "validarMedio.php" method = "POST" enctype = "multipart/form-data">
<!--Titulo-->
    <label for = "titulo">Título:
    <input type = "text" name= "titulo" required class = "form-control" />
    </label>
    <br/>
<!--ADE-->
<label for = "ADE">Artista/Director/Escritor(ADE):
    <input type = "text" name= "ADE" required class = "form-control" />
    </label>
    <br/>
<!--Medio-->
<label for = "medio">Medio:
    <input type = "text" name= "medio" required class = "form-control" />
    </label>
    <br/>
<!--BOTÓN "ENVIAR"-->
    <input type = "submit" value = "Enviar" name = "submit" required class = "btn btn-success" />
    </form>
<?php require_once "includes/footer.php";     //pie
?>