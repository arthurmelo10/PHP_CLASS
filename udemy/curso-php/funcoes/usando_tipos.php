<div class="titulo">Usando Tipos</div>

<?php
print('<b>Exemplo 1 - Parâmetro não tipado</b><br>');

function somar1($a, $b)
{
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}
echo '
<pre>
function somar1($a, $b)
{
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}
</pre>';
echo 'somar1(1,2) ->';
echo somar1(1,2) . '<br>';
echo 'somar1(1.7, 2.5) ->';
echo somar1(1.7, 2.5) . '<br>';
echo 'somar1(1, "4dois") ->';
echo somar1(1, '4dois'); // considera o numero 4 dentro da string para realizar a soma - linguagem de tipagem dinâmica

echo '<hr>';

print('<p><b>Exemplo 2 - Parâmetro Tipado</b><br>');
function somar2(int $a, int $b)
{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo '
<pre>
function somar2(int $a, int $b)
{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
</pre>';

echo 'somar2(1,2) -> ';
echo somar2(1,2) . '<br>';// dois valores inteiros, sem problemas
echo 'somar2(1.7, 2.5) -> ';
echo somar2(1.7, 2.5) . '<br>'; // no momento que passou um float, o php vai converter o o float para um int (truncar a parte decimal)
echo 'somar2(1, "4dois") -> ';
echo somar2(1, '4dois'); //Só vai entrar na função o algarismo 4, presente na string

echo '<hr>';

print('<p><b>Exemplo 3 - Retorno Tipado</b><br>');

echo 'Converter a resposta da função para o tipo de retorno definido';

function somar3($a, float $b): int
{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo '
<pre>
function somar3($a, float $b): int
{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
</pre>';

echo 'somar3(1, 2) -> ';
echo somar3(1, 2) . '<br>'; // sem problemas
echo 'somar3(1.7, 2.5) -> ';
echo somar3(1.7, 2.5) . '<br>'; // somente o resultado será truncado para inteiro - retornando 4
echo 'somar3(1,"4dois") -> ';
echo somar3(1,'4dois') . '<br>'; // 

echo '<hr>';
echo '<b>Pode definir os tipos dos parâmetros e tipo do retorno - pode uisar as duas coisas</b> <br>';
echo '<b>A definição de tipos gera impacto no retorno da função como nos exemplo 2 e exempos 3</b> <br>';

