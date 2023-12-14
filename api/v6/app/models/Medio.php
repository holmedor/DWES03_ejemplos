<?php

class Medio{
//    private $id;
//    private $titulo;
//    private $ADE;
//    private $medio;

// protected $id;
// protected $titulo;
// protected $ADE;
// protected $medio;

    public $id;
    public $titulo;
    public $ADE;
    public $medio;

//    public function __construct( string $id, string $titulo, string $ADE, string $medio){
    public function __construct( int $id, string $titulo, string $ADE, string $medio){
        $this->id=$id;
        $this->titulo=$titulo;
        $this->ADE=$ADE;
        $this->medio=$medio;
    }

/*
    public function __construct($data){
        $this->id=$data->id;
        $this->titulo=$data->$titulo;
        $this->ADE=$data->$ADE;
        $this->medio=$data->$medio;
    }
*/
    public function mostrarMedio(){
        echo "ID: ".$this->id."<br>";
        echo "Titulo: ".$this->titulo."<br>";
        echo "ADE: ".$this->ADE."<br>";
        echo "Medio: ".$this->medio."<br>";
    }
    public function getId(){
        return $this->id;
    }

    public function actualizarTitulo($data){
        $this->titulo=$data;
    }
    public function actualizarADE($data){
        $this->ADE=$data;
    }
    public function actualizarMedio($data){
        $this->medio=$data;
    }
}
?>