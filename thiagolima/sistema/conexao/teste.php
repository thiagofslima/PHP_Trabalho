<?php
    require_once 'conexao.php';

    //Instanciar a classe de conexão do banco de dados
    $conexao = new Conexao();
?>

<html>
    <head>
        <title>Página de teste</title>
    </head>
    <body>
        <?php
            echo "Teste de Conexão MySql - Início! <br><br>";

            echo $conexao->testar_banco();

            echo "<br><br>Teste de Conexão MySql - Fim!";
        ?>
    </body>
</html>