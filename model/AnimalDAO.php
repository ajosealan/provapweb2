<?php
    require_once 'Database.php';
    require_once 'model/Animal.php';

    class AnimalDAO{
        private $db;

        public function __construct(){
            $this->db = Database::getConexao();
        }

        public function cadastrar(Animal $animal){
            $nome = $animal->getNome();
            $tipo = $animal->getTipo();
            $raca = $animal->getRaca();
            $peso = $animal->getPeso();
            $altura = $animal->getAltura();

            $stmt = $this->db->prepare("INSERT INTO animais (nome, tipo, raca, peso, altura) VALUES (:nome, :tipo, :raca, :peso, :altura)");
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":tipo", $tipo);
            $stmt->bindParam(":raca", $raca);
            $stmt->bindParam(":peso", $peso);
            $stmt->bindParam(":altura", $altura);
            return $stmt->execute();

        }

        public function excluir($id){
            $stmt = $this->db->prepare("DELETE  FROM animais WHERE id = :id" );
 
            $stmt->bindParam(":id", $id);

            $stmt->execute();

        }

        public function atualizar($id, $nome, $tipo, $raca, $peso, $altura){
            $stmt = $this->db->prepare("UPDATE animais SET nome = :nome, tipo = :tipo, raca = :raca, peso = :peso, altura = :altura WHERE id = :id" );
 
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":tipo", $tipo);
            $stmt->bindParam(":raca", $raca);
            $stmt->bindParam(":peso", $peso);
            $stmt->bindParam(":altura", $altura);


            $stmt->execute();

        
        }
    }

?>