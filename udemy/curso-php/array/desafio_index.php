<div class="titulo">Desafio Index</div>

<?php
$lista = array(
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8,
);
print('<b>Com será impresso o seguinte array?</b><br>');

/**
 * Array (
 * [0] => 8 
 * [4] => 2 
 * [3] => 3 
 * [a] => 4 
 * [5] => 5 
 * [9] => 6
 * [06] => 7
 * )
 */

 print_r($lista);

 print('<p><b>Acrescentando valores</b><br>');
 echo '$lista[9] = '.$lista['9'];
 $lista[9] = 10;
 echo '<br>novo $lista[9] = '.$lista[9];
 $lista[6] = 'numero 6';
 echo '<br>$lista[6] = '.$lista[6];
 echo '<br>';
 print_r($lista);
 print('<p><b>O índice string 9, é convertido para um número inteiro 9, assim é possível fazer a alteração de valores !!!</b>');