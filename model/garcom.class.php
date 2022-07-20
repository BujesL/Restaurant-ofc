<?php 
    class Garcom{
        private $nome;
        private $cpf;
        private $telefone;

        public function __construct ($nome,$cpf,$telefone){
            $this->nome=$nome;
            $this->cpf=$cpf;
            $this->telefone=$telefone;
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
        public function setNome($n){
            $this->nome=$n;
        }
        public function setCpf($c){
            $this->cpf=$c;
        }
        public function setTelefone($t){
            $this->telefone=$t;
        }
    }
?>