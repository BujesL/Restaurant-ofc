<?php
  class Pedido{
     private $nome;
     private $descricao;
     private $bebida;
     private $cliente;

     public function __construct($nome,$descricao,$bebida,$cliente){
          $this->nome = $nome;
          $this->descricao = $descricao;
          $this->bebida = $bebida;
          $this->cliente = $cliente;
     }

     public function setNome($nome){
          $this->nome = $nome;
     }
     public function setDescricao($descricao){
          $this->descricao = $descricao;
     }
     public function setBebida($bebida){
          $this->bebida = $bebida;
     }
     public function setCliente($cliente){
          $this->cliente = $cliente;
     }
     public function getNome(){
          return $this->nome;
     }
     public function getDescricao(){
          return $this->descricao;
     }
     public function getBebida(){
          return $this->bebida;
     }
     public function getCliente(){
          return $this->cliente;
     }
  }
  ?>