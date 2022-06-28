<div class="titulo">Comparação Arrays</div>

<?php
print('<b>Exemplo Comparação 1</b>');
$array_1 = [
    'nome' => 'Maria',
    'idade' => 20,

];
echo '<br> $array_1 = ';
print_r($array_1);

$array_2 = [
    'nome' => 'Maria',
    'idade' => 20,

];
echo '<br> $array_2 = ';
print_r($array_2);

echo '<br> $array_1 == $array_2 -> ';
var_dump($array_1 == $array_2);

echo '<br> $array_1 === $array_2 -> ';
var_dump($array_1 === $array_2);

print('<p><b>Exemplo Comparação 2</b>');
$array_3 = [
    'idade' => 20,
    'nome' => 'Maria',

];
echo '<br> $array_3 = ';
print_r($array_3);

echo '<br> $array_1 == $array_3 -> ';
var_dump($array_1 == $array_3);

echo '<br> $array_1 === $array_3 -> ';
var_dump($array_1 === $array_3);
echo '<br> A ordem das chaves influencian na comparação estrita, por isso a resposta é falso.';

echo '<br> $array_1 != $array_3 -> ';
var_dump($array_1 != $array_3);
echo '<br> Aqui, a ordem não influencia, por isso é retornado falso, quando a comparação não é estrita';

echo '<br> $array_1 !== $array_3 -> ';
var_dump($array_1 !== $array_3);

print('<p><b>Exemplo Comparação 3</b>');
$array_4 = [
    'idade' => '20',
    'nome' => 'Maria',

];
echo '<br> $array_4 = ';
print_r($array_4);

echo '<br> $array_1 == $array_4 -> ';
var_dump($array_1 == $array_4);
echo '<br>O tipo do dados não interfere, pois o valor é o mesmo, na comparação entre os arrays';

echo '<br> $array_1 === $array_4 -> ';
var_dump($array_1 === $array_4);
echo '<br>O tipo do dados interfere, assim como a ordem, e por isso, é retornado falso!';


print('<p><b>Se for adicionado um outro elemento ou chave no array, a igualdade == também será falsa, pois o tamanho dos arrays serão diferentes entre si.</b>');