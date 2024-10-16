<?php
  class Prod{
    public $id;
    public $nom;
    public $precio;

    public function __construct(){

    }
    public function getId(){
      return $this->id;
    }
    public function getNom(){
      return $this->nom;
    }
    public function getPrecio(){
      return $this->precio;
    }
    public function setId($id){
      $this->id = $id;
    }
    public function setNom($nom){
      $this->nom = $nom;
    }
    public function setPrecio($precio){
      $this->precio = $precio;
    }
  }
?>