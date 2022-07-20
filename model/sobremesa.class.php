<?php
  class Sobremesa{
     private $nome;
     private $opcao;
     private $temperatura;

     public function __construct($nome,$opcao,$temperatura){
          $this->nome = $nome;
          $this->opcao= $opcao;
          $this->temperatura = $temperatura;
          
     }
     public function setOpcao($opcao){
          $this->opcao = $opcao;
     }
     public function setTemperatura($temperatura){
          $this->temperatura = $temperatura;
     }
     public function setNome($nome){
        $this->nome = $nome;
   }
     public function getOpcao(){
          return $this->opcao;
     }
     public function getTemperatura(){
          return $this->temperatura;
     }
     public function getNome(){
        return $this->nome;
   }
  }

?>