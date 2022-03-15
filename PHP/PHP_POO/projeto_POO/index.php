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
            require_once 'Vizualização.php';
            
            $pessoa = array();
            $pessoa[0] = new Gafanhoto("Luna",1,"F");
            $pessoa[1] = new Gafanhoto("Arthur", 26, "M");
            $pessoa[2] = new Gafanhoto("Jullia", 17, "F");    

            $video = array();
            $video[0] = new Video("Aula Pratica 14");
            //$video[0]->like();
            $video[1] = new Video("Aula Pratica 14B");
            $video[2] = new Video("Aula Pratica 15");

            print_r($pessoa[1]);
            print_r($video[2]);

            $visualização = array();
            $visualização[0] = new Visualização($pessoa[1], $video[2]);
            $visualização[0]->assistirVideo($pessoa[1], $video[2]);
            $pessoa[1]->setLogin(true);
            $visualização[0]->assistirVideo($pessoa[1], $video[2]);
            $visualização[0]->assistirVideo($pessoa[1], $video[2]);
            $visualização[0]->assistirVideo($pessoa[1], $video[2]);

            print_r($visualização[0]);
            
            $visualização[1] = new Visualização($pessoa[2], $video[1]);
            $visualização[1]->assistirVideo($pessoa[2], $video[1]);
            $pessoa[2]->setLogin(true);
            $visualização[1]->assistirVideo($pessoa[2], $video[1]);
            $visualização[1]->assistirVideo($pessoa[2], $video[1]);
            $visualização[1]->assistirVideo($pessoa[2], $video[1]);
            $visualização[1]->avaliar("Não");

            print_r($visualização[1]);
            
            $visualização[2] = new Visualização($pessoa[2], $video[0]);
            $visualização[2]->assistirVideo($pessoa[2], $video[0]);
            $visualização[2]->avaliar("Sim");
            print_r($visualização[2]);
            //$visualização_1->reagirVideo("Sim");
            //print_r($pessoa[1]);
            //print_r($video[2]);
            //print_r($pessoa);
            //print_r($video);
            
            
        ?>
    </pre>
</body>
</html>