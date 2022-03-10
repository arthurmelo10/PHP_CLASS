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
            require_once 'Animal.php';
            require_once 'Mamifero.php';
            require_once 'Peixe.php';
            require_once 'Reptil.php';
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Arara.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Goldfish.php';
            require_once 'Tartaruga.php';

            //$animal = new Animal;
            $mamifero = new Mamifero;
            $mamifero->emitirSom();
            $mamifero->setPeso(82.6);
            $mamifero->alimentar();
            $mamifero->setMembros(4);
            $mamifero->setIdade(5);
            $mamifero->locomover();

            $canguru = new Canguru;
            $canguru->emitirSom();
            $canguru->locomover();
            $canguru->setPeso(135.95);
            $canguru->setIdade(4);
            $canguru->setMembros(4);
            $canguru->setCorPelo("Pardo");
            $canguru->alimentar();

            $cachorro = new Cachorro;
            $cachorro->setIdade(10);
            $cachorro->setPeso(26.87);
            $cachorro->setMembros(4);
            $cachorro->abanarRabo();
            $cachorro->emitirSom();
            $cachorro->enterrarOsso();
            $cachorro->setCorPelo("Cinza");
            $cachorro->locomover();

            $tartaruga = new Tartaruga;
            $tartaruga->setPeso(90);
            $tartaruga->setMembros(4);
            $tartaruga->alimentar();
            $tartaruga->locomover();

            $ave = new Ave;
            $ave->emitirSom();
            $ave->setIdade(10);
            $ave->setPeso(15);
            $ave->locomover();
            $ave->fazerNinho();
            //$ave->setCorPelo("Preta");

            $reptil = new Reptil;
            $reptil->emitirSom();
            $reptil->setPeso(90);
            $reptil->alimentar();
            $reptil->locomover();
            
            $peixe = new Peixe;
            $peixe->emitirSom();
            $peixe->locomover();
            $peixe->setMembros(0);
            $peixe->soltarBolha();
            $peixe->setPeso(3.25);

            

            print_r($animal);
            print_r($ave);
            print_r($reptil);
            print_r($mamifero);
            print_r($peixe);
            print_r($canguru);
            print_r($cachorro);
            print_r($tartaruga);
        ?>
    </pre>
</body>
</html>