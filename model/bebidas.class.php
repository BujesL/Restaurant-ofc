<?php
  class Bebidas{
     private $nome;
     private $sabor;
     private $tipo;

     public function __construct($nome,$sabor,$tipo){
          $this->nome = $nome;
          $this->sabor = $sabor;
          $this->tipo = $tipo;
          
     }
     public function setSabor($sabor){
          $this->sabor = $sabor;
     }
     public function setTipo($tipo){
          $this->tipo = $tipo;
     }
     public function setNome($nome){
        $this->nome = $nome;
   }
     public function getSabor(){
          return $this->sabor;
     }
     public function getTipo(){
          return $this->tipo;
     }
     public function getNome(){
        return $this->nome;
   }
  }

?>