<?php
    define('Raiz', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR);
    include_once '../model/cliente_model.php';
    include_once Raiz . 'header.php';
    include_once Raiz . 'footer.php';
    
    $cliente = new Cliente();

    if(isset($_GET['id']) && ($_GET['acao'] == "editar" || $_GET['acao'] == "deletar")) {
        $id = $_GET['id'];
        $cliente->readId($id);
    }

    function comboBox($sexo) {

    }
?>

<html>
    <head>
        <title>Detalhe Cliente</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../../style.css">
    </head>

    <body>
        <?php
            if($_GET['acao'] == "cadastrar") {

                echo "<h1 class='titulo'>Cadastar Cliente</h1>";
            }
            else if($_GET['acao'] == "editar") {
                echo "<h1 class='titulo'>Editar Cliente</h1>";
            }
            echo "<hr>";
        ?>

        <form id="cadastro" class="exercicios" name="cadastro" method="post" action="../control/cliente_control.php?acao=<?php echo $_GET['acao']; ?>">
            <div class="form-row">
                <!-- Id -->
                <div class="col-md-1 mb-3">
                    <label for="">Id</label>
                    <input type="text" class="form-control" name="id" readonly value="<?php echo $cliente->getId(); ?>">
                </div>
                <!-- Nome -->
                <div class="col-md-6 mb-3">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" name="nome" value="<?php echo $cliente->getNome(); ?>">
                </div>
                <!-- Sobrenome -->
                <div class="col-md-5 mb-3">
                    <label for="">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" value="<?php echo $cliente->getSobrenome(); ?>">
                </div>

            </div>
            <div class="form-row">
                <!-- Email -->
                <div class="col-md-8 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $cliente->getEmail(); ?>" placeholder="email@exemplo.com">
                </div>
                <!-- Idade -->
                <div class="col-md-1 mb-3">
                    <label for="inputIdade">Idade</label>
                    <input type="text" class="form-control" id="inputIdade" name="idade" value="<?php echo $cliente->getIdade(); ?>">
                </div>
                <!-- Sexo -->
                <!-- <div class="form-group col-md-2"> -->
                <div class="col-md-3 mb-3">
                    <label>Sexo</label>
                    <select class="custom-select" name="sexo" id="">
                        <option selected disabled>Selecione..</option>
                        <option value="M"  <?=($cliente->getSexo() == 'M')? 'selected' : ''?>>Masculino</option>
                        <option value="F"  <?=($cliente->getSexo() == 'F')? 'selected' : ''?>>Feminino</option>
                    </select>
                </div>
            </div>
            <!-- <input class="form-control" type="date" name="" id=""> -->
            
            <br>
            <div class="alinhar-direita">
                <button type="submit" class="btn btn-primary" id="cadastrar">Salvar</button>
                <a href="../view/clientes.php"><button type="button" class="btn btn-secundary" id="voltar">Voltar</button></a>

            </div>
        </form>
        
        <?php
            if(isset($_POST['cadastrar'])) {
                $cliente->setNome("Thiago");
                $sql_query = $cliente->create();
            }
        ?>
    </body>
</html>