<?php
require_once 'model/Cliente.php';
require_once 'model/ClienteDAO.php';

    class ClienteController{
        public function cadastrar($request){
            
            $cliente = new Cliente($request['nome'], $request['celular'], $request['email'], $request['senha'], 
            $request['endereco'], $request['cidade'], $request['estado']);
            $clienteDAO = new ClienteDAO();

            if($clienteDAO->cadastrar($cliente)){
                $_REQUEST['msg'] = 'Cliente inserido com sucesso';
                require_once 'view/sucesso.php';
            } else{
                $_REQUEST['msg'] = 'Erro ao inserir o CLiente';
                require_once 'view/erro.php';
            }
        }

        public function login($request){
            $email = $request['email'];
            $senha = $request['senha'];

            $clienteDAO = new ClienteDAO();

            $clienteDAO->login($email, $senha);
        }

    }
    
?>