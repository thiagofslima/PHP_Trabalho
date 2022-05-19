<?php
include_once '../header.php';
include_once '../footer.php';
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>

<body>
    <div class="exercicios">
        <h2>Exercício 2</h2>
        <hr>
        <p>
            2 - Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes.
        </p>
        <hr>

        <form method="post">
            <p>
                Informe um número: <br>
                <input type="number" id="1" name="num">
            </p>
            <input type="submit" value="Calcular">
            <input type="submit" value="Limpar">
        </form>

        <?php
        function Calcular($numero, $divisor)
        {
            if ($numero % $divisor == 0) {
                return "Número '$numero' é divisível por '$divisor'";
            } else {
                return "Número '$numero' NÃO é divisível por '$divisor'";
            }
        }

        function CalcularTodos($numero)
        {
            if (($numero % 10 != 0) && ($numero % 5 != 0) && ($numero % 2 != 0)) {
                return "Número '$numero' não é divisível por nenhum!";
            }
        }


        if (isset($_POST['num'])) {
            $numero = $_POST['num'];
            if (!empty($numero)) {


                echo Calcular($numero, 10), "<br>";
                echo Calcular($numero, 5), "<br>";
                echo Calcular($numero, 2), "<br>";
                echo "<br>";
                echo CalcularTodos($numero);
            } else {
                echo "Informe um número!";
            }
        } else {
            echo "Informe um número!";
        }
        ?>
    </div>

</body>

</html>