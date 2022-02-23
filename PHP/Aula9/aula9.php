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
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tera $i anos";
        /*
        if ($i >= 18) {
            $v = "já pode votar";
            $d = "já pode dirigir";
        } else {
            $v = "Não pode votar";
            $d = "Não pode dirigir";
        }
        echo "Com essa idade você $v e  e também $d"
        */
        if ($i < 16){
            $tipoVoto = "não vota";
        } elseif ($i >= 16 && $i < 18) or ($i > 65){
            $tipoVoto = "voto opcional";
        } else {
            $tipoVoto = "voto obrigatório";
        }
        
        echo "para esta idade, $tipoVoto";

       
    ?>
</body>
</html>