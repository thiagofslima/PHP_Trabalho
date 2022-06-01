<?php
    include_once 'header.php';
    include_once 'footer.php';

    /**
    * Retorna o tamanho de um determinado arquivo em KB, MB, GB TB, etc
    * @param String $arquivo O arquivo a ser verificado
    * @return String O tamanho do arquivo (já formatado)
    */
    function tamanho_arquivo($arquivo) {
        $tamanhoarquivo = filesize($arquivo);
    
        /* Medidas */
        $medidas = array('KB', 'MB', 'GB', 'TB');
    
        /* Se for menor que 1KB arredonda para 1KB */
        if($tamanhoarquivo < 999){
            $tamanhoarquivo = 1000;
        }
    
        for ($i = 0; $tamanhoarquivo > 999; $i++){
            $tamanhoarquivo /= 1024;
        }
    
        return round($tamanhoarquivo) . $medidas[$i - 1];
    }

    $caminho = './docs/';
    $nome = 'VPS.pdf';
?>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>VPS</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d54ce2bb89.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <script>
            function mostrarPdf(botao){
                
                var elemento = document.getElementById("exibe-pdf");
                // var conteudo = getComputedStyle(elemento).getPropertyValue("display");

                if(botao.textContent == "Visualizar") {
                    botao.textContent = "Ocultar";
                    elemento.style.display = "block";
                }
                else if(botao.textContent == "Ocultar") {
                    botao.textContent = "Visualizar";
                    elemento.style.display = "none";
                }
            }
        </script>

        <h1 class="titulo text-shadow">VPS</h1>
        <hr>

        <div class="exercicios">
            <?php echo "Arquivo: " . $nome .  "<br>Tamanho: " . tamanho_arquivo($caminho . $nome) . "<br><br>" ?>

            <a class="btn btn-primary" href="<?php echo $caminho . $nome ?>" download="<?php echo $nome ?>" type="application/msword">Baixar Arquivo</a>
            <button class="btn btn-primary" onclick="mostrarPdf(this)">Visualizar</button>
        </div>

        <div class="exibe-pdf" id="exibe-pdf">
            <embed src="./docs/VPS.pdf" type="application/pdf" width="100%" height="100%">
        </div>
        
    </body>

</html>