<?php
include_once '../header.php';
include_once '../footer.php';
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
</head>

<body>

    <div class="exercicios">
        <h2>Exercício 5</h2>
        <hr>
        <p>
            5 - Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.
        </p>
        <hr>

        <form method="post">
            <p>
                Informe o número de 1 a 12: <br>
                <input type="number" name="num" min="1" max="12">
            </p>
            <input type="submit" value="Ok">
        </form>

        <?php
        if (isset($_POST['num'])) {
            switch ($_POST['num']) {
                case 1:
                    echo "Janeiro";
                    break;
                case 2:
                    echo "Fevereiro";
                    break;
                case 3:
                    echo "Março";
                    break;
                case 4:
                    echo "Abril";
                    break;
                case 5:
                    echo "Maio";
                    break;
                case 6:
                    echo "Junho";
                    break;
                case 7:
                    echo "Julho";
                    break;
                case 8:
                    echo "Agosto";
                    break;
                case 9:
                    echo "Setembro";
                    break;
                case 10:
                    echo "Outubro";
                    break;
                case 11:
                    echo "Novembro";
                    break;
                case 12:
                    echo "Dezembro";
                    break;
                default:
                    echo "Mês inexistente";
            }
        } else {
            echo "Informe um número.";
        }
        ?>
    </div>

</body>

</html>