<?php
  class Sushi{
     private $nome;
     private $molho;
     private $modo;

     public function __construct($nome,$molho,$modo){
          $this->nome = $nome;
          $this->molho= $molho;
          $this->modo= $modo;
          
     }
     public function setMolho($molho){
          $this->molho = $molho;
     }
     public function setModo($modo){
          $this->modo = $modo;
     }
     public function setNome($nome){
        $this->nome = $nome;
   }
     public function getMolho(){
          return $this->molho;
     }
     public function getModo(){
          return $this->modo;
     }
     public function getNome(){
        return $this->nome;
   }
  }

?>