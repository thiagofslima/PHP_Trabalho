<?php
include_once '../header.php';
include_once '../footer.php';
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>

<body>
    <div class="exercicios">
        <h2>Exercício 3</h2>
        <hr>
        <p>
            3 - Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.
        </p>
        <hr>

        <form method="post">
            <p>
                Informe o nome: <br>
                <input type="text" name="nome" id="1">
            </p>
            <p>
                Sexo: <br>
                <input type="radio" name="sexo" value="masculino"> Masculino
                <input type="radio" name="sexo" value="feminino"> Feminino
            </p>
            <p>
                Idade: <br>
                <input type="number" name="idade" id="">
            </p>
            <input type="submit" value="Aceitar">
        </form>

        <?php
        function Aceitar($sexo, $idade)
        {
            if ($sexo == "feminino" && $idade < 25) {
                return true;
            } else {
                return false;
            }
        }

        if (isset($_POST['nome'], $_POST['sexo'], $_POST['idade'])) {
            $nome = $_POST['nome'];
            $sexo = $_POST['sexo'];
            $idade = $_POST['idade'];

            if (Aceitar($sexo, $idade)) {
                echo "$nome - ACEITO";
            } else {
                echo "$nome - NÃO ACEITO";
            }
        } else {
            echo "Preencha os campos.";
        }

        ?>
    </div>

</body>

</html>