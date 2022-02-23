<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
                    /* exemplo de aplicação de operadores de atribuição*/
                    $preço = 1000;
                    $preço2 = 1000;
                    echo "O preço do produto é $preço";
                    $preço += $preço *10/100;
                    echo "<br/>O novo preço do produto, com aumento, é R$ " . number_format($preço,2, ",",".");
                    $preço2 -= $preço2*10/100;
                    echo "<br/>O novo preço do produto, com desconto, é R$ " . number_format($preço2,2,",",".");
                    
                    $atual = 2022; // esta linha é o ano atual
                    echo "<br/>O ano atual é $atual";
                    echo "<br/>O ano atual é $atual e o anterior é ". --$atual;# aqui é o ano anterior
                    echo"<br/>$atual";
                    
                    $a = 3;
                    $b = $a;
                    $b+=5;
                    echo "<br/> $a";
                    echo "<br/> $b";

                    $c = 3;
                    $d = &$c;
                    $d+= 5;
                    echo "<br/>$c";
                    echo "<br/>$d";
                    
                    $site = "Cursoemvídeo";
                    $$site = "Curso PHP"; // variáveis variantes;
                    echo "<br/>O nome do site é $site";
                    echo "<br/>O nome do curso é $Cursoemvídeo";
                    
        ?>     
    </body>
</html>