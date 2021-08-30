<?php
require_once 'model/Animal.php';
require_once 'model/AnimalDAO.php';

    class AnimalController{
        public function cadastrar($request){
            
            $animal = new Animal($request['nome'], $request['tipo'], $request['raca'], $request['peso'], 
            $request['altura']);
            $animalDAO = new AnimalDAO();
            if($animalDAO->cadastrar($animal)){
                $_REQUEST['msg'] = 'Animal inserido com sucesso';
                require_once 'view/sucesso.php';
            } else{
                $_REQUEST['msg'] = 'Erro ao inserir o animal';
                require_once 'view/erro.php';
            }
        }

        public function excluir($request){
            $id = $request['id'];

            $animalDAO = new AnimalDAO();
            $animalDAO->excluir($id);
            header('Location: ../provapweb2/model/PaginaClienteLogado.html');
            
        }

        public function atualizar($request){
            $id = $request['id'];
            $nome = $request['nome'];
            $tipo = $request['tipo'];
            $raca = $request['raca'];
            $peso = $request['peso'];
            $altura = $request['altura'];


            $animalDAO = new AnimalDAO();

            $animalDAO->atualizar($id, $nome, $tipo, $raca, $peso, $altura);
            header('Location: ../provapweb2/model/PaginaClienteLogado.html');
        }
    }
?>