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
        // Passagem por valor
    
    /*function teste($x) {
    	$x+=2;
        echo "O valor de X é $x<br/>";
    }
    
    $a = 3;
    teste($a);
    echo "O valor de A é $a<br/>";*/
    //echo "<br/>$x";
    
    //Passagem por referência
    /*function test (&$x){
        $x = $x +2;
        echo "O Valor de X é $x<br/>";
    }
    $a = 3;
    test($a);
    echo $a;*/
    
    //
    function ola() {
    	echo "<h1>Ola, Mundo!</h1>";
    }
    
    function mostraValor($v) {
    	echo "<h2> Acabei de receber o valor $v </h2>";
        
    }
    
    //include funcoes.php - link com o arquivo específico de funcoes
    
    echo "<h1>Testando novas funções</h1>";
    ola();
    mostraValor(10);
    echo "<h2>Finalizando Programa...</h2>";
    ?>
</body>
</html>