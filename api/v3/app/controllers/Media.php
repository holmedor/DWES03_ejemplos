<?php

class Media{
    function __construct(){

    }

    //GET
    function getAllMedia(){
        echo "Hola desde el metodo getAllMedia() de MEDIA Controller <br>"; 
    }
    function getMediaById($id){
        echo "Hola desde el metodo getMediaById() de MEDIA Controller <br>"; 
        echo "El ID del MEDIO es " .$id."<br>";
    }
    //POST
    public function createMedia($data){
        echo "Hola desde el metodo createMedia() de MEDIA Controller <br>"; 
        echo "Los datos del MEDIO son " .json_encode($data)."<br>";    
    }
    //PUT
    public function updateMedia($id,$data){
        echo "Hola desde el metodo updateMedia() de MEDIA Controller <br>"; 
        echo "Los datos del MEDIO son " .json_encode($data)."<br>";    
    }
    //DELETE
    public function deleteMedia($id){
        echo "Hola desde el metodo deleteMedia() de MEDIA Controller <br>"; 
        echo "El ID del MEDIO es " .$id."<br>";    
    }

}

?>