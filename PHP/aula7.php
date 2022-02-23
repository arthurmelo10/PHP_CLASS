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
            $tipo = i;
            $n1 = 10;
            $n2 = 20;
            echo "Os valores passados foram $n1 e $n2 <br/>";
            $r = ($tipo == "s")? $n1+$n2:$n1*$n2;
            echo "O resultado é igual a $r<br/>";
            
            $a = 3;
            $b = "3";
            $p = $a === $b ? "SIM":"NÃO";
            echo "As variáveis A e B são iguais? $p";
            $not1 = 10;
            $not2 = 7;
            $media = ($not1 +$not2)/2;
            echo "<br/>A média das notas é $media";
            $sit = $media < 6 ? "reprovado" : "aprovado";
            echo "<br/> O aluno está ". ($media < 6 ? "reprovado" : "aprovado");
            
            $nascimento = 2004;
            $ano = 2022;
            $idade = $ano - $nascimento;
            echo "<br/>Quem nasceu em $nascimento, possui $idade anos<br/>";
            $tipo = ($idade >=18 && $idade<=65)?"Obrigatório":"Facultativo";
            echo "O voto do usuário é $tipo<br/>";
            echo "<h1>FORA BOLSONARO!!</h1>";
            
        ?>
    </body>
</html>    
    