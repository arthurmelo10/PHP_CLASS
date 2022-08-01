<div class="titulo">Argumentos Variáveis</div>

<?php
print('<b>Exemplo 1 - Função Soma</b><br>');

echo '
<br>function soma($a, $b) 
<br>{
    <br>return $a + $b;
<br>}
';
function soma($a, $b) 
{
    return $a + $b;
}

echo '<br>soma(4,5) = ', soma(4,5);
echo '<br>soma(14,15, 6, 7, 8, 9) = ', soma(14,15, 6, 7, 8, 9);
echo '<br><b>Sempre pega os dois primeiros valores passados !!!</b>';
echo '<br>soma(6, 5, 4) = ', soma(6, 5, 4);

echo '<hr>';
print('<p><b>Exemplo 2 - Função somaCompleta</b><br>');

echo '<b>notação de três pontos - inclui os valores passados na função em um array</b>';
function somaCompleta(...$numeros)
{
    print_r($numeros);
    $soma = 0;
    foreach ($numeros as $numero) {
        $soma = $soma + $numero;
    }

    return $soma;
}
echo '
<br>function somaCompleta(...$numeros)
<br>{
    <br>print_r($numeros);
    <br>$soma = 0;
    <br>foreach ($numeros as $numero) {
        <br>$soma = $soma + $numero;
        <br>}

        <br>return $soma;
<br>}
';
echo '<br>';
echo 'somaCompleta(1, 2, 3, 4, 5) = ',somaCompleta(1, 2, 3, 4, 5);

$array = [6,7,8];
echo '<p> variável $array = '; 
print_r($array);
//echo '<br>somaCompleta($array) = ',somaCompleta($array);
echo '<br>É possível espalhar o array nos parâmetros da chamada da função';
echo '<br>somaCompleta(...$array) = ',somaCompleta(...$array);

echo '<hr>';
print('<p><b>Exemplo 3 - Funções Mistas (parâmetros fixos e variáveis)</b><br>');

function membros($titular, ...$dependentes)
{
    echo "Titular: $titular <br>";
    if ($dependentes) {
        foreach ($dependentes as $dependente) {
            echo "Dependentes: $dependente <br>";
        }
    }
    // !$dependentes ? 'Sem dependentes' : 
    // foreach ($dependentes as $dependente) {
    //     echo "Dependentes: $dependente <br>";
    // };
}

echo '
<br>function membros($titular, ...$dependentes)
<br>{
    <br>echo Titular: $titular;
    <br>if ($dependentes) {
        <br>foreach ($dependentes as $dependente) {
            <br>echo Dependentes: $dependente;
            <br>}
            <br>}
            <br>}
';
echo '<br>';
echo 'membros("Ana Silva", "Pedro", "Rafaela", "Amanda"): ';
echo '<br>';
membros('Ana Silva', "Pedro", "Rafaela", "Amanda");
echo 'membros("Arthur"): ';
echo '<br>';
membros("Arthur");