<?php

    class Database{
        public static $conexao = null;

        public static function getConexao(){

            try{
                return self::$conexao = new PDO("mysql:host=localhost; dbname=provapweb2", "root","");
            }catch(Exception $e) {
                echo $e->getMessage();
            }
        }

    }

?>