<?php
    require_once '../../includes.php';
    
    include_once '../model/cliente_model.php';
    $cliente = new Cliente();
    $contadorClientes = 0;
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="../../style.css">
        <title>Lista de Clientes</title>
    </head>
    <body>

        <h1 class="titulo">Lista de Clientes</h1>

        <hr>
        
        <div class="listar">
            <form action="../view/cliente_detalhes.php?acao=cadastrar" method="post">
                <button type="submit" class="btn btn-primary">Novo Cliente</button>
            </form>
            
            <form class="form-inline alinhar-direita" method="post">

                <div class="row form-group">
                    <div class="form-check-inline"><label class="form-check-label">Ordenar por:</label></div>
                    <?php $teste = "teste"?>
                    <select class="custom-select mr-sm-2" name="ordem" id="">
                        <option value="Id">Id</option>
                        <option selected value="Nome">Nome</option>
                        <option value="Sobrenome">Sobrenome</option>
                        <option value="Email">Email</option>
                        <option value="Idade">Idade</option>
                        <option value="Sexo">Sexo</option>
                    </select>
                    <input class="form-control mr-sm-2" type="search" placeholder="" name="pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </div>

            </form>

            <table class="table table-bordered table-hover table-secundary">
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
                            $contadorClientes++;

                        
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
                            <!-- Botão Editar -->
                            <form class="centro-margin" method="post" action="../view/cliente_detalhes.php?acao=editar&&id=<?php echo $dados['Id']?>">
                                <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                            </form>
                            <!-- Botão Excluir -->
                            <form class="centro-margin" method="post" action="../view/cliente_detalhes.php?acao=deletar&&id=<?php echo $dados['Id']?>">
                                
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
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
            <?php echo "Total de Clientes: " . $contadorClientes ?>
        </div>
    </body>
</html>