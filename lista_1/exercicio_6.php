<?php
include_once '../header.php';
include_once '../footer.php';
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
</head>

<body>
    <div class="exercicios">

        <h2>Exercício 6</h2>
        <hr>
        <p>
            6 - A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo do empréstimo. Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias.
        </p>
        <hr>
        <form method="post">
            <p>
                Livro: <br>
                <input type="text" name="livro" id="1">
            </p>
            <p>
                Usuário: <br>
                <input type="radio" name="usuario" value="Professor"> Professor
                <input type="radio" name="usuario" value="Aluno"> Aluno
            </p>

            <input type="submit" value="Recibo">
        </form>

        <?php

        function CalcularData($usuario)
        {
            if ($usuario == "Professor") {
                return date('d/m/Y', strtotime('+10 days'));
            } else if ($usuario == "Aluno") {
                return date('d/m/Y', strtotime(('+3 days')));
            }
        }

        if (isset($_POST['livro'], $_POST['usuario'])) {
            $livro = $_POST['livro'];
            $usuario = $_POST['usuario'];

            echo "<strong><<< Recibo de Empréstimo >>> </strong><br>
                Livro: $livro <br>
                Usuário: $usuario <br>
                Data devolução: " . CalcularData($usuario);
        }
        ?>
    </div>

</body>

</html>