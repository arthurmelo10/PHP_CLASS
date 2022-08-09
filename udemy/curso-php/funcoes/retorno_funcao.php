<div class="titulo">Retornando Função</div>

<?php
print('<b>Exemplo 1</b>');

function soma($a)
{
    return function($b)
    {
        return $a + $b;
    };
}

echo '
<pre>
function soma($a)
{
    return function($b)
    {
        return $a + $b;
    };
}
</pre>';

echo '<br>';
echo 'soma(2)(2) = ';
echo soma(2)(2);

echo '<p><strong>Único valor impresso foi $b, pois po valorde $a não é acessado pela função anônima</strong><br>';

echo '<hr>';

print('<b>Exemplo 2</b>');

function soma_1($a)
{
    //algoritmo
    return function ($b) use ($a)
    {
        return $a + $b;
    };
}

echo '
<pre>
function soma_1($a)
{
    return function ($b) use ($a)
    {
        return $a + $b;
    };
}
</pre>';

echo '<br>';
echo 'soma_1(3)(3) = ';
echo soma_1(3)(3);
echo '<br>';
echo 'soma_1(13)(3) = ';
echo soma_1(13)(3);


echo '<p>Antes do começo da função, se tivermos um algoritmo. 
e queremos deixar parte do algoritmo para ser chamado de forma tardia.
Podemos resolver parte do problema eventualmente armazenando dentro de uma variável e só chamar quando tiver os parâmetros necessários</p>';

// Qubrar o algoritmos em partes, com funções que retornam funções
echo '<b>Exemplo com variável !!!!</b><br>';
echo '$doisMais = soma_1(2) => ';
$doisMais = soma_1(2);
var_dump($doisMais);

echo '<br>';
echo '<br> $doisMais = ', $doisMais(10);
echo '<br> $doisMais = ', $doisMais(18);
