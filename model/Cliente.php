<?php
    class Cliente{

        private $nome;
        private $celular;
        private $email;
        private $senha;
        private $endereço;
        private $cidade;
        private $estado;

        public function __construct($nome, $celular, $email, $senha, $endereco, $cidade, $estado){
            $this->nome = $nome;
            $this->celular = $celular;
            $this->email = $email;
            $this->senha = $senha;
            $this->endereco = $endereco;
            $this->cidade = $cidade;
            $this->estado = $estado;
        }
        

        public function getNome(){
            return $this->nome;
        }
        public function getCelular(){
            return $this->celular;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function getEndereco(){
            return $this->endereco;
        }
        public function getCidade(){
            return $this->cidade;
        }
        public function getEstado(){
            return $this->estado;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setCelular($celular){
            $this->celular = $celular;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
        public function setEstado($estado){
            $this->estado = $estado;
        }


    }
?>