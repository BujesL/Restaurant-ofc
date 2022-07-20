<?php
  class ComidaTradicional{
     private $nome;
     private $retirar;
     private $acresentar;

     public function __construct($nome,$retirar,$acresentar){
          $this->nome = $nome;
          $this->retirar= $retirar;
          $this->acresentar = $acresentar;
        }
        public function setRetirar($retirar){
          $this->retirar = $retirar;
        }
     public function setAcresentar($acresentar){
          $this->acresentar = $acresentar;
    }
     public function setNome($nome){
        $this->nome = $nome;
    }
     public function getRetirar(){
          return $this->retirar;
     }
     public function getAcresentar(){
          return $this->acresentar;
     }
     public function getNome(){
        return $this->nome;
    }
}

?>