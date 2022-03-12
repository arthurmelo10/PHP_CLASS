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
            require_once 'Gafanhoto.php';
            require_once 'Video.php';
            

            $pessoa = new Gafanhoto;
            $pessoa->setName("Luna");
            $pessoa->setSexo("F");
            $pessoa->setIdade(1);

            $video = new Video;
            $video->setTitulo("Aula Prática 14");
            $video->play();

            print_r($pessoa);
            print_r($video);
        ?>
    </pre>
</body>
</html>