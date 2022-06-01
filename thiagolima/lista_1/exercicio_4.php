<?php
include_once '../header.php';
include_once '../footer.php';
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 4</title>
</head>

<body>
    <div class="exercicios">
        <h2>Exercício 4</h2>
        <hr>
        <p>
            4 - Entrar com 3 números e imprimi-los em ordem decrescente.
        </p>
        <hr>

        <form method="post">
            <p>
                Número 1: <br>
                <input type="number" name="num1">
            </p>
            <p>
                Número 2: <br>
                <input type="number" name="num2">
            </p>
            <p>
                Número 3: <br>
                <input type="number" name="num3">
            </p>

            <input type="submit" value="Ordenar">

        </form>

        <?php
        if (isset($_POST['num1'], $_POST['num2'], $_POST['num3'])) {

            $numeros = array($_POST['num1'], $_POST['num2'], $_POST['num3']); //Criando array com números informados
            rsort($numeros); //Ordenando decrescente
            foreach ($numeros as $num) {
                echo "$num <br>";
            }
        } else {
            echo "Informe os números.";
        }
        ?>
    </div>

</body>

</html>