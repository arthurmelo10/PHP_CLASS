<div class="titulo">Introdução Array</div>

<?php
/**
 * Tipo muito importante de várias linguagens de programação
 * Em PHP, é mais poderoso
 * Pode ser indexado tanto com número (índice) quanto com chave 
 */

print('<b>Definição</b><br>');
echo 'Array é um tipo de dado que pode ser unidimensional ou multidimensional(matriz). A partir de uma única variável, 
pode obter um conjunto de elementos. Os elementos podem ser de tipos diferentes.<br>';

print('<p><b>Formas de printar um array</b><br>');
$lista = array(1,2,3.4,"texto");
echo 'echo $lista = '.$lista;
echo '<br> var_dump = ';
var_dump($lista);
echo '<br> print_r = ';
print_r($lista);
$lista[0] = 1234;
echo '<br> print_r = ';
print_r($lista);
echo ' (alteração do primeiro elemento)';

print('<p><b>Formas de acessar elementos de um array</b><br>');
echo 'Para acessar os elementos de um array, é necessário chamar os índices de cada elemento. Lembrando que sempre o primeiro índice é o 0.';
echo '<br> $lista[0] = '.$lista[0];
echo '<br> $lista[1] = '.$lista[1];
echo '<br> $lista[2] = '.$lista[2];
echo '<br> $lista[3] = '.$lista[3];
echo '<br><b>Se colocarmos um índice inexistente, será retornado nulo, vide o exemplo a seguir</b>';
echo '<br> $lista[4] = '.$lista[4];
echo '<br> var_dump($lista[4]) = ';
var_dump($lista[4]);

echo '<br>Podemos utilizar esta metodologia para acessar caractereste de strings. Entretanto, strings levam em consideração espaços e acentuação.';
$texto = 'Este é um texto de teste';
echo '<br>'.$texto;
echo '<br> $texto[0] = '.$texto[0];
echo '<br> $texto[2] = '.$texto[2];
echo '<br> $texto[10] = '.$texto[10];
echo '<br> $texto[11] = '.$texto[11];
echo '<br> função mb_substr = '.mb_substr($texto, 10, 1); // função considera o encode utilizado