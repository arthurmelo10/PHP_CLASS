<div class="titulo">Funções Anônimas</div>

<?php
print('<b>Exemplo 1 - função anônima dentro de uma variável</b><br>');
// Recurso muito interessante
// armazenar uma função em uma variável
// passar uma função como parâmetro para uma outra função 
// Ter uma função que retorna uma outra função
// Paradigma de programação funcional

// Maior flexibilidade

// Focar mais na questão da sintaxe, como defnir uma função anônima e armazenar em uma variável

$soma = function ($a, $b)
{ 
    return $a + $b; 
};

$multiplicação = function ($a, $b)
{
    return $a * $b;
};

$subtração = function ($a, $b)
{
    return $a - $b;
};

$divisão = function ($a, $b)
{
    return $a/$b;
};

echo '
<pre>
$soma = function ($a, $b)
{ 
    return $a + $b; 
};
</pre>';

echo '
<pre>
$multiplicação = function ($a, $b)
{
    return $a * $b;
};
</pre>';

echo '
<pre>
$subtração = function ($a, $b)
{
    return $a - $b;
};
</pre>';

echo '
<pre>
$divisão = function ($a, $b)
{
    return $a/$b;
};
</pre>';

ECHO 'Chamando a função dentro da variável soma: $soma(1,1) -> ';
echo $soma(1,1) . '<br>';

echo '<br>';

ECHO 'Chamando a função dentro da variável mulltiplicação: $multiplicação(4,2) -> ';
echo $multiplicação(4,2) . '<br>';

echo '<br>';

ECHO 'Chamando a função dentro da variável subtração: $subtração(6,3) -> ';
echo $subtração(6,3) . '<br>';

echo '<br>';

ECHO 'Chamando a função dentro da variável divisão: $divisão(4,2) -> ';
echo $divisão(4,2) . '<br>';
echo '<hr>';

print('<p><b>Exemplo 2 - Função como parâmetro</b><br>');

function executar ($a, $b, $op, $funcao ) 
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

echo '
<pre>
function executar ($a, $b, $op, $funcao ) 
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}
</pre>';
echo 'Chamando a função executar(2,3,+,$soma) -> ';
executar (2,3,'+',$soma);

echo '<br>';

echo 'Chamando a função executar(7,3,-,$subtração) -> ';
executar (7,3,'-',$subtração);

echo '<br>';

echo 'Chamando a função executar(8,4,*,$multiplicação) -> ';
executar (8,4,'*',$multiplicação);

echo '<br>';

echo 'Chamando a função executar(9,3,/,$divisão) -> ';
executar (9,3,'/',$divisão);

// Não está dentro da função executar a lógica do que será feito
// Executar é uma função flexível

echo '<br>';

function divisao($a,$b)
{
    return $a / $b;
}
echo '
<pre>
function divisao($a,$b)
{
    return $a / $b;
}
</pre>';
echo 'Chamando a função executar(2,3,/, divisao) -> ';
executar(2,3,'/', divisao);
echo 'Também funciona com uma função normal';



