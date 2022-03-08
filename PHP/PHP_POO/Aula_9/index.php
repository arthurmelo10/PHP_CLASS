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
            require_once 'Livro.php';

            $pessoa1 = new Pessoa("Arthur", 26, "M");
            $pessoa2 = new Pessoa("Maria", 31, "F");
            
            $livro1 = new Livro("Harry Potter", "J.kRowling", 500, $pessoa1);
            $livro2 = new Livro("POO php", "José da Silva", 300, $pessoa1);
            $livro3 = new Livro("Poo Avançado", "Roberto Lima", 200, $pessoa2);

            /*print_r($pessoa1);
            print_r($pessoa2);*/
            
            $livro3->detalhes();

            //$livro1->abrir();
            /*$livro1->folhear(501);*/
            //$livro1->avançarPag();
            //$livro1->voltarPAg();
            $livro1->folhear(10);


            $livro1->detalhes();
            //$livro1->fechar();
            //print_r($livro1);

            
        ?>
    </pre>    
</body>
</html>