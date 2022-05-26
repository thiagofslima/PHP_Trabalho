<?php
    include_once '../model/cliente_model.php';
    $cliente = new Cliente();

    //Se existe o parametro 'acao' na URL
    if(isset($_GET['acao'])) {
        $acao = $_GET['acao'];
    }
    else if(isset($_GET['acao'])) {
        $acao = $_GET['acao'];
    }
    else {
        $acao ="";
    }


    if($acao == "cadastrar") {
        $cliente->setNome($_POST['nome']);
        $cliente->setSobrenome($_POST['sobrenome']);
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setSexo($_POST['sexo']);

        $cliente->create();
    }else if($acao == "editar") {
        $cliente->setId($_POST['id']);
        $cliente->setNome($_POST['nome']);
        $cliente->setSobrenome($_POST['sobrenome']);
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setSexo($_POST['sexo']);
        
        $cliente->update();
    }else if($acao == "deletar") {
        $cliente->setId($_POST['id']);
        $cliente->delete();
    }
     header("Location: ../view/clientes.php");


?>