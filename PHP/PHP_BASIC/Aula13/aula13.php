<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="aula13.php">   
        <select name="num">
            <?php
                f/*or ($d =1; $d<=10; $d+=1) {
                    echo "$d ";
                }
                echo "<br/>";
                for ($d = 10; $d >= 1; $d-=1){
                    echo "$d";
                echo "<br/>";
                for ($d = 0; $d<=50; $d+=5){
                    echo "$d ";
                }
                echo "<br/>";
                for ($d = 50; $d >= 0; $d-=5){
                    echo "$d ";
                }

                }*/
                for($i = 1; $i <=10; $i +=1){
                    echo "<option>$c</option>";
                }
            ?>
        </select>
        <input type = "submit" value = "Tabuada"/>
    </form>
    
    <?php
    //tabuada
        $n = isset($_GET["num"])?$_GET["num"]:1
        for ($d; $d<=10; $d+=1){
            $r = $n*$d
            echo "$n x $d = $r"            
        }
    ?>
</body>
</html>