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
            require_once 'Lutador.php';

            /*$l1 = new Lutador("Pretty Boy", "França", 30, 1.75, 110, 11, 2,1);
            $l1->apresentar();
            //$l1->status();*/
            $L = array();

            $L[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3,1);
            $L[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $L[2] = new Lutador("Snapshadow", "USA", 35, 1.65, 80.9, 12, 2, 1);
            $L[3] = new Lutador("Dead Code", "Australia", 27, 1.93, 81.6, 13, 0, 2);
            $L[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $L[5] = new Lutador("Nerdaard", "USA", 30, 1.81, 105.7, 12, 2, 4);


            $L[0]->apresentar();
            $L[2]->status();
            $L[3]->perderLuta();
            $L[1]->ganharLuta();
            $L[0]->empatarLuta();

            print_r($L);
        ?>
    </pre>    
</body>
</html>