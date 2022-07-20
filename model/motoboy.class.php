<?php
  class Motoboy{
     private $nome;
     private $cpf;
     private $endereco;
     private $telefone;

     public function __construct($nome,$cpf,$endereco,$telefone){
          $this->nome = $nome;
          $this->cpf = $cpf;
          $this->endereco = $endereco;
          $this->telefone = $telefone;
     }

     public function setNome($nome){
          $this->nome = $nome;
     }
     public function setCpf($cpf){
          $this->cpf = $cpf;
     }
     public function setEndereco($endereco){
          $this->endereco = $endereco;
     }
     public function setTelefone($telefone){
          $this->telefone = $telefone;
     }
     public function getNome(){
          return $this->nome;
     }
     public function getCpf(){
          return $this->cpf;
     }
     public function getEndereco(){
          return $this->endereco;
     }
     public function getTelefone(){
          return $this->telefone;
     }
  }
  ?>