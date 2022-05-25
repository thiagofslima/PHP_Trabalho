<?php
    include_once '../model/cliente_model.php';
    $cliente = new Cliente();

    //Se existe o parametro 'acao' na URL
    if(isset($_GET['acao'])) {
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
        
        header("Location: ../view/clientes.php");
    }
    else {

    }


?>