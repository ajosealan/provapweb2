<?php
    class Consulta{

        private $idanimal;
        private $idveterinario;
        private $dia;
        private $mes;
        private $ano;
        private $relatorio;

        public function __construct($idanimal, $idveterinario, $dia, $mes, $ano, $relatorio){
            $this->nome = $idanimal;
            $this->idveterinario = $idveterinario;
            $this->celular = $dia;
            $this->email = $mes;
            $this->senha = $ano;
            $this->endereco = $relatorio;
        }
        

        public function getIdanimal(){
            return $this->idanimal;
        }
        public function getIdveterinario(){
            return $this->idveterinario;
        }
        public function getDia(){
            return $this->dia;
        }
        public function getMes(){
            return $this->mes;
        }
        public function getAno(){
            return $this->ano;
        }
        public function getRelatorio(){
            return $this->relatorio;
        }

        public function setIdanimal($idanimal){
             $this->idanimal = $idanimal;
        }
        public function setIdveterinario($idveterinario){
            $this->idveterinario = $idveterinario;
       }
        public function setDia($dia){
            $this->dia = $dia;
        }
        public function setMes($mes){
            $this->mes = $mes;
        }
        public function setAno($ano){
            $this->ano = $ano;
        }
        public function setRelatorio($relatorio){
            $this->relatorio = $relatorio;
        }

    }
?>