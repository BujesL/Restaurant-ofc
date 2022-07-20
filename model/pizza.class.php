<?php
  class Pizza{
     private $nome;
     private $retirar;
     private $acresentar;
     private $borda;

     public function __construct($nome,$retirar,$acresentar,$borda){
          $this->nome = $nome;
          $this->retirar= $retirar;
          $this->acresentar = $acresentar;
          $this->borda = $borda;
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
    public function setBorda($borda){
        $this->borda = $borda;
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
    public function getBorda(){
        return $this->borda;
   }
}

?>