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

            //encapsulamento

            /*Todo o código estando encapsulado protege o meio interior do meio exterior, e vice e versa
            mantém o código protegido
            mantém a implementação interna oculta, deixar privado o que deve ser priuvado e púlico o que deve ser público, intereface pública é a parte externa que deixamos o objeto com contato com o mundo exterior
            Para proiteger o objeto do usuário e vice e versa, utilizamos a capsula
            Interface parece classe, mas não tem atributos
            Todos o métodos são públicos
            A classe implementa a interface
            Atributos privados
            Métodos abstratos são desenvolvidos na classe
            Métodos especiais são aplicados, mas de modo privado*/

            require_once 'ControleRemoto.php';

            $controle1 = new ControleRemoto();
            $controle1->ligar();
            //$controle1->setVolume(35);
            $controle1->maisVolume();
            /*$controle1->menosVolume();
            $controle1->menosVolume();
            $controle1->menosVolume();
            $controle1->menosVolume();
            $controle1->menosVolume();
            $controle1->menosVolume();*/
            $controle1->abrirMenu();
            
            print_r($controle1);
        ?>
    </pre>
</body>
</html>

