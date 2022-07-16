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
    //Procedimento - Soma - Sem Retorno
        
        function soma($a, $b) {
            $s = $a + $b;
            echo $s;
        }
        soma(3,4)

    // Procedimento - Soma - Com Retorno
        
        function soma($a, $b){
            $s = $a + $b;
            return $s
        }

        $x = 3;
        $y = 4;
        $r = soma($x, $y);
        echo "O valor da soma entre $x e $y é $r"

    //Procedimento Soma com múltiplos fatores
    function soma () {
        $p = func_get_args();
        $tot = func_num_args();
        $d = 0;
        for($i = 0; $i <= $tot; $i+=1){
            $d += $p[$i];
            //echo "$p";
   			//echo "<br>$tot";
            //echo "<br/>$d";
        }
        return $d;
    }
    
    $r = soma(2,3,5,8,9,4);
    //echo "<br/>$r";
    echo "<br/> O valor da soma da lista de número é igual a $r";
    ?>
</body>
</html>