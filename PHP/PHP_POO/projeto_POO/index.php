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
            
            $pessoa = array();
            $pessoa[0] = new Gafanhoto("Luna",1,"F");
            $pessoa[1] = NEW Gafanhoto("Arthur", 26, "M");
            $pessoa[2] = new Gafanhoto("Jullia", 17, "F");    

            $video = array();
            $video[0] = new Video("Aula Pratica 14");
            $video[0]->like();
            $video[1] = new Video("Aula Pratica 14B");
            $video[2] = new Video("Aula Pratica 15");

            print_r($pessoa);
            print_r($video);
        ?>
    </pre>
</body>
</html>