<?php
    require_once 'Database.php';
    require_once 'model/Cliente.php';

    class ClienteDAO{
        private $db;

        public function __construct(){
            $this->db = Database::getConexao();
        }

        public function cadastrar(Cliente $cliente){
            $nome = $cliente->getNome();
            $celular= $cliente->getCelular();
            $email = $cliente->getEmail();
            $senha = $cliente->getSenha();
            $endereco = $cliente->getEndereco();
            $cidade = $cliente->getCidade();
            $estado = $cliente->getEstado();

            $stmt = $this->db->prepare("INSERT INTO clientes (nome, celular, email, senha, endereco, cidade, estado) VALUES (:nome, :celular, :email, :senha, :endereco, :cidade, :estado)");
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":celular", $celular);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":senha", $senha);
            $stmt->bindParam(":endereco", $endereco);
            $stmt->bindParam(":cidade", $cidade);
            $stmt->bindParam(":estado", $estado);
            return $stmt->execute();

        }

        public function login($email, $senha){
            $stmt = $this->db->prepare("SELECT * FROM clientes WHERE email = :email and senha = :senha" );
 
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":senha", $senha);

            $stmt->execute();

            if($resultado = $stmt->fetch(PDO::FETCH_ASSOC)){
                foreach ($resultado as $key => $value){
                    echo $key.": ".$value."</br>";
                }
                header('Location: ../provapweb2/model/PaginaClienteLogado.html');
            }else{
                echo "Erro ao fazer login";
                header('Location: ../provapweb2/model/PaginaLoginCliente.html');
            }

           

            /*echo "<pre>";
            print_r($resultado);
            echo "</pre>";*/
        }

    }
?>