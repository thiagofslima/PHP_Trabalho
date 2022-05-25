<?php
    define('Raiz', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR);
    include_once '../model/cliente_model.php';
    include_once Raiz . 'header.php';
    include_once Raiz . 'footer.php';
    $cliente = new Cliente();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../../style.css">
        <title>Lista de Clientes</title>
    </head>
    <body>

        <h1 class="titulo">Lista de Clientes</h1>

        <hr>
        <form action="../view/cliente_detalhes.php?acao=cadastrar" style="text-align: center;">
            <button type="submit" class="btn btn-primary">Novo Cliente</button>
        </form>
        <hr>

        <div class="listar">
            
            <form class="form-inline alinhar-direita" method="post">

                <div class="row form-group">
                    <div class="form-check-inline"><label class="form-check-label">Ordenar por:</label></div>
                    <select class="custom-select mr-sm-2" name="ordem" id="" name="ordem">
                        <option value="Id">Id</option>
                        <option selected value="Nome">Nome</option>
                        <option value="Sobrenome">Sobrenome</option>
                        <option value="Email">Email</option>
                        <option value="Idade">Idade</option>
                        <option value="Sexo">Sexo</option>
                    </select>

                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" name="pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </div>

            </form>

            <table class="table table-bordered table-hover table-light">
                <thead>
                <tr>
                    <th scope="col" width="80px">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Email</th>
                    <th scope="col" width="100px">Idade</th>
                    <th scope="col" width="100px">Sexo</th>
                    <th scope="col" width="160px">Ações</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                    //Conexão com o objeto para realizar a leitura dos dados
                    if(isset($_POST['pesquisar']) && $_POST['pesquisar'] != '') {
                        $sql_query = $cliente->readLike($_POST['pesquisar'], $_POST['ordem']);
                    }
                    else if(isset($_POST['pesquisar']) && $_POST['ordem'] != null) {
                        $sql_query = $cliente->read($_POST['ordem']);
                    }
                    //Quando tiver carregando a página pela primeira vez, ordena por nome automático
                    else {
                        $sql_query = $cliente->read("Nome");
                    }

                    
                    if($sql_query->num_rows == 0) {
                        
                    //}
                ?>
                    <tr>
                        <td colspan="4">Nenhum resultado encontrado...</td>
                    </tr>
                <?php
                    }
                    else {
                        //Pega o primeiro registro e atribui para $dados, e segue o loop
                        while($dados = $sql_query->fetch_assoc()) {

                        
                ?>

                <tr>
                    <th scope="row"><?php echo $dados['Id']; ?></th>
                    <td><?php echo $dados['Nome']; ?></td>
                    <td><?php echo $dados['Sobrenome']; ?></td>
                    <td><?php echo $dados['Email']; ?></td>
                    <td><?php echo $dados['Idade']; ?></td>
                    <td><?php echo $dados['Sexo']; ?></td>
                    <td>
                        <div class="form-inline">
                            <form class="centro-margin" action="" method="post">
                                <button type="button" class="btn btn-warning btn-sm">Editar</button>
                            </form>
                            <form class="centro-margin" action="" method="post">
                                <button type="button" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php
                        }
                    }
                ?>

                </tbody>
            </table>
        </div>

    </body>
</html>