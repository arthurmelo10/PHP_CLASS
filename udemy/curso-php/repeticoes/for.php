<div class="titulo">Laço For</div>

<?php
/**
 * Laço for é apropriado para uma quantidade determinada de repetições
 * Ou seja, vai ter uma variável que vai controlar a quantidade de repetições
 * Cria uma variável, iniciando por 1 ou por 0
 * Vai ter uma expressão verdadeira ou falso - se for verdadeiro, continua a repetição, se for falso sai
 * Definir algum tipo de modificação da variávelpara que ela torne a expressão falsa
 */
print(
    '<b>OBSERVAÇÕES</b>
    <br>Laço for é apropriado para uma quantidade determinada de repetições;
    <br>Ou seja, vai ter uma variável que vai controlar a quantidade de repetições;
    <br>Cria uma variável, iniciando por 1 ou por 0;
    <br>Vai ter uma expressão verdadeira ou falso - se for verdadeiro, continua a repetição, se for falso sai;
    <br>Definir algum tipo de modificação da variávelpara que ela torne a expressão falsa;
    '
);

print('<br><b>Exemplo 1</b>'); 
echo '<br><b>for($cont = 1; $cont<=5; $cont++) { }</b>';
echo '<br>A primeira expressão ($cont = 1) é analisada na criação da expressão for. As demais são analisadas a cada iteração';
echo '<br> A expressão será repetida até que cont tenha o valor de 5</br>';
for($cont = 1; $cont<=5; $cont++) { 
    echo "cont = $cont <br>";
}
echo '<br><b>for($cont = 0; $cont<5; $cont++) { }</b>';
echo'<br>Também será repetido 5 vezes, só que agora de 0 a 4';
for($cont = 0; $cont<5; $cont++) { 
    echo "cont = $cont <br>";
}

print('<p><br><b>Exemplo 2 - Expressões Incompletas</b>');
echo'<br>Não sou obrigado a ter todas as partes no laço for';
echo'<br><b>for (; $cont<=10; $cont++) { }</b></br>'; 
for (; $cont<=10; $cont++) {
    echo "cont = $cont <br>";
}
echo 'A variável $cont está inicializada fora do laço for !!';
echo '<br> Pode não ter nenhuma das partes no laço for, mas ai, cai em uma laço infinito !!';

echo '<br> for (; $cont <= 15;) { }';
echo '<br> Laço for sem o incremento da variável. Ele pode ser incluído dentro do bloco de código !!';
for (; $cont <= 15;) {
    echo "<br> cont = $cont";
    $cont++;
}

print('<p><br><b>Exemplo 3 - Array Unidimensional</b>');
$array = [
    'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado',
];
echo '<br>$array = ';
print_r($array);
echo '<br><b>for ($i = 0; $i < count($array); $i++) {}</b>';
echo '<br>A variável $i irá percorrer os índices do array. Perceba que ele está utilizando o tamanho do array para sair do laço for.';
for ($i = 0; $i < count($array); $i++) {
    echo "<br>Dia da Semana = $array[$i]";
}

$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado',
];
echo '<br>$array = ';
print_r($array);
echo '<br><b>for ($i = 1; $i <= count($array); $i++) {}</b>';
echo '<br> Array começando no índice 1 faz-se necessário algumas mudanças no laço for';
for ($i = 1; $i <= count($array); $i++) {
    echo "<br>Dia da Semana = $array[$i]";
}

print('<p><br><b>Exemplo 4 - Array Multidimensional</b>');

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd'],
];
echo '<br> $matrix = ';
print_r($matrix);

echo '<br> É necessário fazer dois laços for, um para percorrer o array mais externo e um para percorrer o array mais interno';
echo '<br><b>
for ($i = 0; $i < count($matrix); $i++) { 
    <br> echo "{$matrix[$i]} = ";
    <br> for ($j = 0; $j < count($matrix[$i]); $j++) {
        <br> echo "{$matrix[$i][$j]}";
    }
}
</b>';
for ($i = 0; $i < count($matrix); $i++) {
    echo "<br>{$matrix[$i]} = ";
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} , ";
    }
}

