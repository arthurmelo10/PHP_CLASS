<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="get" action="aula11.php">
            <?php 
                /*
                $c =1;
                while ($c<=10){
                    echo $c . "</br>";
                    $c+=1;
                }
                $a = 10;
                while ($a>=1){
                    echo $a . "</br>";
                    $a-=1;
                }
                */   
                /*
                $c =1;
                while ($c <= 5){
                    echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0' /><br/>";
                    $c++;
                */
                $i = 1;
                while ($i <= 5) {
                    $v = "num".$i;
                    $url = "v".$i;
                    $$v = isset($_GET[$url])?$_GET[$url]:0;
                    $i++;
                }
                echo "$num1 $num2 $num3 $num4 $num5";
            ?>     
            <input type="submit" value="Enviar" class="botao"/>

        </form>
    </div>
</body>
</html>