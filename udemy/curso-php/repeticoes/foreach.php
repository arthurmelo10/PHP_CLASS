<div class="titulo">Laço Foreach</div>

<?php
/**
 * Laço For mais otimizado
 * Não precisa ter uma variável controlando o laço
 * Um pouco menos explícitas
 * Forma mais comum de percorrer um array do primeiro elemento até o último
 */

print('<b>Exemplo 1</b>');
$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado',
];
echo '<br> $array = ';
print_r($array);
echo '<br>Não preciso me preocupar com a chave do elemento do array</br>';

echo'foreach($array as $valor) {
    <br>echo "$valor";
    <br>} :
<br>';

foreach($array as $valor) {
    echo "$valor<br>";
}

print('<p><b>Exemplo 2</b><br>');
echo '
foreach ($array as $indice => $valor) {
    <br>echo "$indice => $valor";
    <br>}
    <br>';
foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
} 
echo '<br>Não preciso criar variável para controlar exatamente onde vai';

echo '<br> Dentre todas as estruturas de controle abordadas, devemos sempre escolher com base naquilo que queremos fazer com o nosso algoritmo';

print('<p><b>Exemplo 3</b><br>');
$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd'],
];
echo '<br> $matrix = ';
print_r($matrix);
echo '<br>';
echo '
foreach ($matrix as $linha) {
    <br>foreach ($linha as $letra) {
        <br>echo "$letra";
        <br>}
        <br>}
<br>';
foreach ($matrix as $linha) {
    echo "$linha = ";
    foreach ($linha as $letra) {
        echo "$letra";
    }
    echo "<br>";
}
echo '<br>';
var_dump($linha);
echo '<br><b>$linha não é um array necessariamente, o seu valor está atrelado ao último elemento do array que está sendo analisado. Sendo assim, ele recebe qualquier tipo de dado</b>';


print('<p><b>Exemplo 4</b><br>');
$numeros = [1, 2, 3, 4, 5];
echo '<br> $numeros = ';
print_r($numeros);
echo '<br>';
echo '
foreach ($numeros as &$dobrar) {
    <br>$dobrar *= 2;
    <br>echo "$dobrar";
    <br>}
<br>';
foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
echo '<br> $numeros = ';
print_r($numeros);

echo '<p><br>Laço foreach foi utilizado para aplicar a definição de valor por referência. Aqui o array originalk tem seus elementos alterados, pois a alteração foi feita no endereço de memória que os valores estavam armazenados';

echo '<br>
foreach ($numeros as $dobrar) {
    <br>$dobrar *= 2;
    <br>echo "$dobrar";
    <br>}
<br>';
foreach ($numeros as $dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
echo '<br> $numeros = ';
print_r($numeros);

echo '<br> $dobrar = ';
print_r($dobrar);
echo '<br>';
var_dump($dobrar);

