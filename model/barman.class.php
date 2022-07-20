<?php 
    class Barman{
        private $nome;
        private $cpf;
        private $telefone;
        private $modo;

        public function __construct ($nome,$cpf,$telefone, $modo){
            $this->nome=$nome;
            $this->cpf=$cpf;
            $this->telefone=$telefone;
            $this->modo=$modo;
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
        public function getModo(){
            return $this->modo;
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
        public function setModo($m){
            $this->modo=$m;
        }
    }
?>