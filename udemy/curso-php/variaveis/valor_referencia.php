<div class="titulo">Valor x Referência</div>

<?php
print('<b>Exemplo 1 - Atribuição por Valor</b><br>');
$variavel = 'valor inicial';
echo '$variavel = ' . $variavel;

$variavelValor = $variavel;
echo '<br> $variavelValor = ' . $variavelValor;

$variavelValor = 'novo valor';
echo '<br> $variavel = ' . $variavel; 
echo '<br> O novo valor de $variavelValor = ' . $variavelValor;

print('<p><b>Os valores são diferentes pois foi feita uma atribuição por valor, 
ou seja, foi feita uma cópia da variável 
$variavel, assim os espaços na memória são diferentes e a alteração em um local, 
não afeta o outro.</b><br>');


print('<p><b>Exemplo 2 - Atribuição por Referência</b><br>');

$variavelReferencia = &$variavel;
echo '$variavel = ' . $variavel;
echo '<br> $variavelReferencia = ' . $variavelReferencia;

$variavelReferencia = 'mesma referencia';
echo '<br> $variavel = ' . $variavel;
echo '<br> $variavelReferencia = ' . $variavelReferencia;
print('<p><b>Os valores são os mesmos pois é uma atribuição por referência, 
ou seja, as variáveis compartilham o mesmo espaço na memória. 
Qualquer alteração em uma delas, será refletida na outra.</b><br>');

$atenção = strtoupper('cuidado com a atribuiÇÃo por referÊncia, pode gerar efeitos colaterias');
echo '<p><b>' . $atenção;

