<?php
require_once 'model/Veterinario.php';
require_once 'model/VeterinarioDAO.php';

    class VeterinarioController{
        public function cadastrar($request){
            
            $vet = new Veterinario($request['nome'], $request['email'], $request['senha']);

            $vetDAO = new VeterinarioDAO();
            if($vetDAO->cadastrar($vet)){
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

            $vetDAO = new VeterinarioDAO();

            $vetDAO->login($email, $senha);
        }

    }
    
?>