<?php
    class Animal{

        private $nome;
        private $tipo;
        private $raca;
        private $peso;
        private $altura;

        public function __construct($nome, $tipo, $raca, $peso, $altura){
            $this->nome = $nome;
            $this->tipo =  $tipo;
            $this->raca= $raca;
            $this->peso= $peso;
            $this->altura = $altura;
        }

        public function getNome(){
            return $this->nome;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function getRaca(){
            return $this->raca;
        }
        public function getPeso(){
            return $this->peso;
        }
        public function getAltura(){
            return $this->altura;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function setRaca($raca){
            $this->raca = $raca;
        }
        public function setPeso($peso){
            $this->peso = $peso;
        }
        public function setAltura($altura){
            $this->altura = $altura;
        }



    }