<?php
    $classe = 'Veterinario';
    $metodo = 'login';

    $classe .= "Controller";

    require_once 'controller/'.$classe.'.php';


    $objeto = new $classe();
  
    if(isset($_REQUEST)){
        $objeto->$metodo($_REQUEST);

    }else {
        $objeto->$metodo();
    }
?>