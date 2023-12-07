<?php

require '../app/models/Medio.php';

class Media{
    function __construct(){

    }

    //GET
    function getAllMedia(){
        echo "Hola desde el metodo getAllMedia() de MEDIA Controller <br>"; 
        //Lectura del json completo
        $json=file_get_contents('../data/media.json',true);
//        $json=file_get_contents('../data/biblioteca.json',true);
        echo "Los datos almacenados son: <br>"; 
        echo print_r($json);
    }
    function getMediaById($id){
        echo "Hola desde el metodo getMediaById() de MEDIA Controller <br>"; 
        echo "El ID del MEDIO es " .$id."<br>";
        //Lectura del json para el id
        $json=file_get_contents('../data/media.json',true);
//        $json=file_get_contents('../data/biblioteca.json',true);
        $media = json_decode($json); 
        foreach ($media as $medio) {
            if($medio->id==$id){
                echo '<pre>';
                print_r($medio);
                echo '</pre>';    
            }
        }
    }
    //POST
    public function createMedia($data){
        echo "Hola desde el metodo createMedia() de MEDIA Controller <br>"; 
        echo "Los datos del MEDIO son " .json_encode($data)."<br>";    
        //Añadir los datos al json si són válidos o indicar que no lo son
    }
    //PUT
    public function updateMedia($id,$data){
        echo "Hola desde el metodo updateMedia() de MEDIA Controller <br>"; 
        echo "Los datos del MEDIO son " .json_encode($data)."<br>";    
        //Actualizar los datos del id del json si existe y si los datos a actualizar son válidos 
        //o indicar que no lo son
        $json=file_get_contents('../data/media.json',true);
//        $json=file_get_contents('../data/biblioteca.json',true);
        $media = json_decode($json); 
        foreach ($media as $medio) {
            if($medio->id==$id){
                echo '<pre>';
                print_r($medio);
                echo '</pre>';    
            }
        }
    }
    //DELETE
    public function deleteMedia($id){
        echo "Hola desde el metodo deleteMedia() de MEDIA Controller <br>"; 
        echo "El ID del MEDIO es " .$id."<br>";    
        //Borrar el id del json si existe o indicar que no existe 
        $json=file_get_contents('../data/media.json',true);
//        $json=file_get_contents('../data/biblioteca.json',true);
        $media = json_decode($json); 
        foreach ($media as $medio) {
            if($medio->id==$id){
                echo '<pre>';
                print_r($medio);
                echo '</pre>';    
            }
        }
    }
    /*        $arrayMedia=[];
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
            $mostrado=false;
            for($i=0; $i<$max; $i++) { 
                var_dump($arrayjson[$i]);
//                array_push($arrayMedia,$arrayjson[$i]);
//                echo $id." VS ".$arrayjson[$i]->$id;
//                if($id==$arrayjson[$i]->$id){
//                echo $arrayjson[$i]->getId()." VS ".$id;
                if($id==$arrayjson[$i]->getId()){
                    $arrayjson[$i]->mostrarMedio();
                    $mostrado=true;
                }
            }
            if($mostrado==false){
                echo "No existe medio para el id ".$id."<br>";
            }
        }*/

}

?>