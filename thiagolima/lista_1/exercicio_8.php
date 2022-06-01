<?php 
    include_once '../header.php'; 
    include_once '../footer.php';
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 8</title>
    </head>
    <body>
        <div class="exercicios">
            <h2>Exercício 8</h2>
            <hr>
            <p>
                8 - Armazenar 15 números inteiros em um vetor e imprimir uma mensagem contendo o número e uma das mensagens: par ou ímpar.
            </p>

            <form method="post">
                <p>
                    Informe os números: <br>
                    <input type="number" name="num1"> <br>
                    <input type="number" name="num2"> <br>
                    <input type="number" name="num3"> <br>
                    <input type="number" name="num4"> <br>
                    <input type="number" name="num5"> <br>
                </p>
                <input type="submit" value="Imprimir">
            </form>

            <?php
                function ParOuImpar($numero) {
                    if($numero % 2 == 0) {
                        echo "Número: $numero, é PAR.";
                    }
                    else {
                        echo "Número: $numero, é IMPAR.";
                    }
                }
                if(isset($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5'])) {
                    $numeros = array($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5']);

                    foreach($numeros as $item) {
                        ParOuImpar($item);
                        echo "<br>";
                    }
                }
                else {
                    echo "Informe os números!";
                }

            ?>
        </div>

    </body>
</html>