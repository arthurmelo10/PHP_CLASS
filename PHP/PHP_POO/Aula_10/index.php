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
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            $pessoa1 = new Pessoa("Arthur", "M", 26);
            $pessoa2 = new Aluno("matemática");
            $pessoa3 = new Professor("matemática", 8500.69);
            $pessoa4 = new Funcionario("inspetor");

            $pessoa1->setNome("Arthur");
            $pessoa2->setNome("João");
            $pessoa2->setIdade(40);
            $pessoa2->setSexo("M");
            $pessoa3->setSexo("F");
            $pessoa4->setIdade(35);
            $pessoa4->setSexo("F");
                      
            print_r($pessoa1);
            print_r($pessoa2);
            print_r($pessoa3);
            print_r($pessoa4);

            $pessoa4->mudarTrabalho();
            //print_r($pessoa4);    

            $pessoa4->fazerAniv();
            $pessoa2->fazerAniv();

            $pessoa3->receberAum(550.00);

            print_r($pessoa4);
            print_r($pessoa3);
            $pessoa2->cancelarMatri();
            print_r($pessoa2);

            $pessoa4->mudarTrabalho();
            print_r($pessoa4);
            
        ?>
    </pre>
</body>
</html>