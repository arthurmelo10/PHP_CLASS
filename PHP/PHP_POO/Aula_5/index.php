<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Conta.php';
            $contaArthur = new Conta();

            /*$contaArthur -> abrirConta("CC");
            $contaArthur -> setSaldo(50);
            $contaArthur -> fecharConta();*/

            //Pessoa 1
            $p1 = new Conta();
            $p1->abrirConta("CC");
            $p1->setDono("Jubileu");
            $p1->setnumConta(1111);
            $p1->depositar(300);
            $p1->pagarMensal();
            $p1->fecharConta();
            $p1->sacar(338);
            $p1->fecharConta();


            //Pessoa 2
            $p2 = new Conta();
            $p2->abrirConta("CP");
            $p2->setDono("Creusa");
            $p2->setnumConta(2222);
            $p2->depositar(500);
            $p2->sacar(1000);
            $p2->pagarMensal();
            $p2->fecharConta();
            $p2->sacar(630);
            $p2->fecharConta();


            print_r($p1);
            print_r($p2);
        ?>
    </pre>    
</body>
</html>