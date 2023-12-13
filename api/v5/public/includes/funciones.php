<?php 

function mediook($medio){ //Devuelve true si el tipo de medio es correcto
    //case para los tipos de medios
    if ($medio!="CD"||$medio!="DVD"||$medio!="Bluray"||$medio!="Bluray3D"||$medio!="LIBRO"){
        return false;
    }else{
        return true;
    }
}

function anyadirMedio($file,$id,$titulo,$ADE,$medio){ //Almacena el medio en media.json
    $myObj = new stdClass();
    $myObj->id=$id;
    $myObj->titulo = $titulo;
    $myObj->ADE = $ADE;
    $myObj->medio = $medio;
    $myJSON = json_encode($myObj);
    echo $myJSON;
    //$fp = fopen($file, "w");
    $fp = fopen($file, "a");
    fwrite($fp, $myJSON);
    fclose($fp);
}

function anyadirMiMedio($arrayMedia,$file,$miMedio){ //Almacena el medio (objeto) en media.json
//    $arrayMedia=array($miMedio);
//    $arrayMedia=[];
//    $miMedio->mostrarMedio();
    array_push($arrayMedia,$miMedio);
    var_dump($arrayMedia);
    $myJSON = json_encode($arrayMedia,JSON_PRETTY_PRINT);
    echo $myJSON;
    $fp = fopen($file, "w");
//    $fp = fopen($file, "a");
    fwrite($fp, $myJSON);
    fclose($fp);
}

function leerMedia($file){
    $arrayMedia=[];
    $size=filesize($file);
    echo "Tamaño del fichero: ".$size."<br>";
    $fp = fopen($file, "r");
    if ( !$fp || $size==0 ) {
        echo "No se ha podido abrir el archivo!!!<br>";
    } else {
        $contents = fread($fp, $size);
        echo "Contenido del fichero: ".$contents."<br>";
        echo "<br>";   
        $arrayjson=json_decode($contents,TRUE);
        $max=sizeof($arrayjson);
        echo "TAMAÑO: ".$max;
        echo "<br>";   
        echo "Contenido del fichero (DECODE): ";
        for($i=0; $i<$max; $i++) { 
            array_push($arrayMedia,$arrayjson[$i]);
        } 
        var_dump($arrayMedia);
        echo "<br>";     
    }
    return $arrayMedia;
}
?>