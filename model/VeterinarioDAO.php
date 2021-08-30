<?php
    require_once 'Database.php';
    require_once 'model/Veterinario.php';

    class VeterinarioDAO{
        private $db;

        public function __construct(){
            $this->db = Database::getConexao();
        }

        public function cadastrar(Veterinario $vet){
            $nome = $vet->getNome();
            $email = $vet->getEmail();
            $senha = $vet->getSenha();

            $stmt = $this->db->prepare("INSERT INTO veterinarios (nome, email, senha) VALUES (:nome, :email, :senha)");
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":senha", $senha);
            return $stmt->execute();

        }

        public function login($email, $senha){
            $stmt = $this->db->prepare("SELECT * FROM veterinarios WHERE email = :email and senha = :senha" );
 
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":senha", $senha);

            $stmt->execute();

            if($resultado = $stmt->fetch(PDO::FETCH_ASSOC)){
                foreach ($resultado as $key => $value){
                    echo $key.": ".$value."</br>";
                }
                header('Location: ../provapweb2/model/PaginaVetLogado.html');
            }else{
                echo "Erro ao fazer login";
                header('Location: ../provapweb2/model/PaginaLoginVet.html');
            }

           

            /*echo "<pre>";
            print_r($resultado);
            echo "</pre>";*/
        }

    }
?>