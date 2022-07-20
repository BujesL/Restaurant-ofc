<?php 
    class Cozinheiro{
        private $nome;
        private $cpf;
        private $telefone;
        private $cozinha;

        public function __construct ($nome,$cpf,$telefone, $cozinha){
            $this->nome=$nome;
            $this->cpf=$cpf;
            $this->telefone=$telefone;
            $this->cozinha=$cozinha;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getCpf(){
            return $this->cpf;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function getCozinha(){
            return $this->cozinha;
        }
        public function setNome($n){
            $this->nome=$n;
        }
        public function setCpf($c){
            $this->cpf=$c;
        }
        public function setTelefone($t){
            $this->telefone=$t;
        }
        public function setCozinha($c){
            $this->cozinha=$c;
        }
    }
?>