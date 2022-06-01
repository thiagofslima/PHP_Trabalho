<?php 
    include_once '../header.php'; 
    include_once '../footer.php';
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 7</title>
    </head>

    <body>
        <div class="exercicios">

            <h2>Exercício 7</h2>
            <hr>
            <p>
                7 - Entrar com o número de vezes que se deseja imprimir a palavra SOL e imprimir.
            </p>
            <hr>

            <form method="POST">
                <p>
                    Informe número de vezes <br>
                    <input type="number" name="qtde">
                </p>
                <input type="submit" value="Imprimir">
            </form>

            <?php
                if(isset($_POST['qtde'])) {
                    $qtde = $_POST['qtde'];

                    for ($i=0; $i < $qtde; $i++) { 
                        echo "SOL";
                        echo "<br>";
                    }
                }
                else {
                    echo "Informe um número.";
                }
            ?>

        </div>
    </body>
</html>