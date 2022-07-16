<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $txt = isset($_GET["t"]):$_GET["t"]:"Texto Genérico";
        $tam = isset($_GET["tam"]):$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"]):$_GET["cor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <?php
    
    // exercício 1
        /*
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "O valor enviado foi $valor<br/>"
        echo "A raiz de $valor é ". number_format($rq,2)
        */
    
    //exercício 2
        /*
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade"
        */

    // exercício 3
        echo "<span class='texto'>$txt</span>";

    
    ?>
    <a href="aula8.html">Voltar</a>
</body>
</html>