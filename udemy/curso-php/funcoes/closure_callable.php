<div class="titulo">Closure $ Callable</div>

<?php
print('<b>Callable</b><br>');

$soma1 = function ($a, $b)
{
    return $a + $b;
};

echo '
<pre>
$soma1 = function ($a, $b)
{
    return $a + $b;
};
</pre>';
// podemos usar isso para proteger a execução de funções que são passadas como parâmetros para outras funções
echo 'Este é um exemplo de um <strong>callable</strong>, algo que pode ser chamado !!';

echo'<br>Chamando a função $soma1 => $soma1(2,3) = ';
echo $soma1(2,3). '<br>';
echo '<br>';
echo 'Função <strong>is_callable</strong>';
echo '<br>Verifica se o conteúdo da função pode ser chamado como uma função</br>';
echo 
'<pre>
echo is_callable($soma1) ? "Sim" : "Não";
</pre>';
echo 'is_callable($soma1) = ';
echo is_callable($soma1) ? 'Sim' : 'Não' . '<br>';

echo '<p><strong>Exemplo negativo !!</strong><br>';
$soma1 = 1;
echo '$soma1 = 1 -> Agora a variável $soma1 é igual a um número inteiro e não mais uma função';
echo '<br>is_callable($soma1) = ';
echo is_callable($soma1) ? 'Sim' : 'Não' . '<br>';
echo 'Desta forma, o retorno da função is_callable é negativo, pois não é mais uma funnção que está associada a variável $soma1.';


echo '<p><strong>Outro Exemplo</strong><br>';
function soma2($a,$b)
{
    return $a + $b;
}
echo '
<pre>
function soma2($a,$b)
{
    return $a + $b;
}
</pre>';
echo 'soma2(2,3) = ';
echo soma2(2,3).'<br>';
echo 'is_callable(soma2) = ';
echo is_callable(soma2) ? 'Sim' : 'Não' . '<br>';
echo 'Uma função também é um callable, por isso o resultado é verdadeiro';
echo '<p><b>Podemos usar isso para proteger a execução de funções que são passadas como parâmetros para outras funções</b>';


echo '<hr>';
print('<p><b>Closure</b><br>');

echo 'Quando definimos uma função anônima, o php internamente joga esta função dentro de uma classe';

$soma1 = function ($a, $b)
{
    return $a + $b;
};
echo '
<pre>
$soma1 = function ($a, $b)
{
    return $a + $b;
};
</pre>';
echo 'var_dump($soma1) = ';
var_dump($soma1);

echo '<strong>$soma1 não é uma função e sim um objeto, que dentro dele existe uma função</strong>';

echo '<p><b>Outro Exemplo</b><br>';
function executar1 ($a, $b, $op, callable $funcao ) 
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

echo '
<pre>
function executar1 ($a, $b, $op, callable $funcao ) 
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}
</pre>';
echo 'Chamando a função executar1(2,3,+,$soma1) -> ';
executar1 (2,3,'+',$soma1);
echo'<br>';
echo 'Chamando a função executar1(2,3,+,soma2) -> ';
executar1 (2,3,'+',soma2);

echo '<b>Closure - uma classe que envolve a função anônima atrelada a uma variável</b>'; 


function executar2 ($a, $b, $op, Closure $funcao ) 
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

echo '
<pre>
function executar2 ($a, $b, $op, Closure $funcao ) 
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}
</pre>';
echo 'Chamando a função executar2(600,100,+,$soma1) -> ';
executar2 (600,100,'+',$soma1);
echo'<br>';
echo 'Chamando a função executar2(1000,3000,+,soma2) -> ';
//executar2 (2,3,'+',soma2);

echo 'Uma função normal não é um closure, 
não é feito nenhum processo automático 
de inclusão dela em uma classe. Por isso, o retorno da chamada da função normal dá erro, neste exemplo específico.<br>';

