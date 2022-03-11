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
            require_once 'Mamifero.php';
            require_once 'Lobo.php';
            require_once 'Cachorro.php';

            $mamifero = new Mamifero;
            $mamifero->emitirSom();

            $lobo = new Lobo;
            $lobo->emitirSom();

            $cachorro = new Cachorro;
            $cachorro->emitirSom();
            $cachorro->reagirDono(true);
            $cachorro->reagirHora(1);
            $cachorro->reagirIP(6,9.60);
            $cachorro->reagirFrase("Vem cá");
            $cachorro->reagirFrase("toma comida");
            $cachorro->reagirFrase("Ola");
            $cachorro->reagirFrase("Sai daqui");
            $cachorro->reagirHora(23);
            $cachorro->reagirHora(24);
            $cachorro->reagirHora(26);

        ?>
    </pre>
</body>
</html>