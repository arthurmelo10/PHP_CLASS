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
            
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';

            //$p1 = new Pessoa; // não pode ser instanciada
            $visitante = new Visitante("Arthur", "M", 26);
            $aluno = new Aluno("Materiais");
            $aluno_two = new Aluno("Letras");
            $aluno_bolsista = new Bolsista("Mecânica");
            $aluno_bolsista2 = new Bolsista("Economia");
            


            $aluno->setNome("Jullia");
            $aluno->setNumMatri(2568);
            $aluno->setSexo("F");
            $aluno->setIdade(25);
            $aluno->pagarMensalidade();

            $aluno_two->setNome("Marcos");
            $aluno_two->pagarMensalidade();


            $aluno_bolsista->setNome("Luis");
            $aluno_bolsista->setIdade(29);
            $aluno_bolsista->setBolsa(50.5);
            $aluno_bolsista->renovarBolsa();
            $aluno_bolsista->pagarMensalidade();
            $aluno_bolsista->fazerAniv();

            $aluno_bolsista2->setNome("Djair");
            $aluno_bolsista2->pagarMensalidade();

            print_r($visitante);
            echo "-------------------";
            print_r($aluno);
            echo "-------------------";

            print_r($aluno_two);

            print_r($aluno_bolsista);
            print_r($aluno_bolsista2);
        ?>
    </pre>
</body>
</html>