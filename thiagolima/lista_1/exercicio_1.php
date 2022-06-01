<?php
    require_once '../includes.php';
?>

<?php
function somar_valores($valor1, $valor2)
{
    return $soma = $valor1 + $valor2;
}
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
</head>

<body>
    <div class="exercicios">
        <h2>Exercício 1</h2>
        <hr>
        <p>
            1 - Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.
        </p>
        <hr>

        <br>
        <br>

        <form method="post">
            <p>
                Informe o valor 1:<br>
                <input type="number" id="1" name="vlr1">
            </p>
            <p>
                Informe o valor 2:<br>
                <input type="number" id="1" name="vlr2">
            </p>
            <input type="submit" value="Calcular">

        </form>


        <?php
        if (isset($_POST['vlr1'], $_POST['vlr2'])) {
            $valor1 = $_POST['vlr1'];
            $valor2 = $_POST['vlr2'];

            if (!empty($valor1) and !empty($valor2)) {
                $soma = $valor1 + $valor2;
                if ($soma > 20) {
                    $soma = $soma + 8;
                } else {
                    $soma = $soma - 5;
                }
                echo $soma;
            } else {
                echo "Informe dois valores!";
            }
        } else {
            echo "Informe dois valores!";
        }
        ?>
    </div>
    </body>

</html>