<?php 

require '../app/models/Medio.php';

require_once 'includes/header.php';     //cabecera de todas las páginas de la TE02
include 'includes/funciones.php';       //funciones definidas para la TE02
$errors=array();                        //variable donde se guardarán los errores tras evaluar el formulario
$errors["titulo"]="";                   //errores correspondientes al campo nombre
$errors["ADE"]="";                      //errores correspondientes al campo apellidos
$errors["medio"]="";                    //errores correspondientes al campo libro
echo "<br>";
if(isset($_POST["submit"])){
    if ( !empty( $_POST[ "titulo" ] ) ) {
    } else {
        $errors[ "titulo" ] = "Titulo: ".$_POST[ "titulo" ]." no es válido. <b>Introduce un título válido.</b><br/>";
    }
    if ( !empty( $_POST[ "ADE" ] ) ) {
    } else {
        $errors[ "ADE" ] = "ADE: ".$_POST[ "ADE" ]." no es válido. <b>Introduce un ADE válido.</b><br/>";
    }
    if ( !empty( $_POST[ "medio" ]) && !mediook($_POST["medio"]) ) {
    } else {
        $errors[ "medio" ] = "El tipo de medio: ".$_POST[ "medio" ]." no es válido. <b>Introduce un tipo de medio válido.</b><br/>";
    }
}
if($errors["titulo"]=="" && $errors["ADE"]=="" && $errors["medio"]==""){
    echo "Título: ".$_POST[ "titulo" ].".<br/>";        
    echo "ADE: ".$_POST[ "ADE" ].".<br/>";
    echo "Medio: ".$_POST[ "medio" ].".<br/>";
    $arrayMedia=leerMedia("../data/biblioteca.json");
    var_dump($arrayMedia);
    $miMedio=new Medio(sizeof($arrayMedia)+1,$_POST[ "titulo" ],$_POST[ "ADE" ],$_POST[ "medio" ]);
    $miMedio->mostrarMedio();
//    var_dump($miMedio);
    anyadirMiMedio($arrayMedia,"../data/biblioteca.json",$miMedio);
} else {
    echo $errors["titulo"];
    echo $errors["ADE"];
    echo $errors["medio"];
}
echo "<br>";
?>
<?php require_once "includes/footer.php";     //cabecera de todas las páginas de la TE02
?>