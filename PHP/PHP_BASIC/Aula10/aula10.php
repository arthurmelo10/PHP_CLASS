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
        /*
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;
        switch($o) {
            case 1: 
                $r = $n*2;
                break
            case 2:
                $r = $n*3;
                break;
            case 3:
                $r = sqrt($n)
                break;
        }
        echo "O número inserido foi $n , a operação solicitada foi $o e o resultado da operação solicitada foi $r "
        */
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        swith($d){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar!!";
                break;
            case 7:
            case 8:
                echo "Vá descansar ";
                break;
            default:
                echo "Dia da Semana Inválido";
        }
    ?>
    <a href = "aula10.html">Voltar</a>
</body>
</html>