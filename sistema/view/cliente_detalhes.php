<?php
    define('Raiz', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR);
    include_once '../model/cliente_model.php';
    include_once Raiz . 'header.php';
    include_once Raiz . 'footer.php';
    
    $cliente = new Cliente();
?>

<html>
    <head>
        <title>Detalhe Cliente</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../../style.css">
    </head>

    <body>
        <h1 class="titulo">Gestão de Clientes</h1>

        <form id="cadastro" class="exercicios" name="cadastro" method="post" action="../control/cliente_control.php?acao=cadastrar">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome">
                </div>

            </div>
            <div class="form-row">
                <!-- Email -->
                <div class="col-md-8 mb-3">
                    <label for="inputEmail4">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        </div>
                        <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                </div>
                <!-- Idade -->
                <div class="col-md-1 mb-3">
                    <label for="inputIdade">Idade</label>
                    <input type="text" class="form-control" id="inputIdade" name="idade">
                </div>
                <!-- Sexo -->
                <!-- <div class="form-group col-md-2"> -->
                <div class="col-md-3 mb-3">
                    <label>Sexo</label>
                    <select class="custom-select" name="sexo" id="" name="sexo">
                        <option selected disabled>Selecione..</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" id="cadastrar">Cadastrar</button>
        </form>
        
        <?php
            if(isset($_POST['cadastrar'])) {
                $cliente->setNome("Thiago");
                $sql_query = $cliente->create();
            }
        ?>
    </body>
</html>