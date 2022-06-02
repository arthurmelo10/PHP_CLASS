<div class="titulo">Desafio Equação</div>

<?php
/**
 * Fração 1
 */
print('<p><b> Fração 1 </b><br>');
$soma = 3 + 2;
$numerador_1 = $soma * 6;
$numerador_1 = $numerador_1**2;
echo '$numerador_1 = ' . $numerador_1;
$denominador_1 = 3 * 2;
echo '<br>' . '$denominador_1 = ' . $denominador_1;
$fracao_1 = $numerador_1 / $denominador_1;
echo '<br>' . '$fracao_1 = ' . $fracao_1;

/**
 * Fração 2
 */
print('<p><b> Fração 2 </b><br>');
$sub_1 = 1 - 5;
$sub_2 = 2 - 7;
echo '$sub_1 = ' . $sub_1;
echo '<br>' . '$sub_2 = ' . $sub_2;
$numerador_2 = $sub_1 * $sub_2;
echo '<br>' . '$numerador_2 = ' . $numerador_2;
$denominador_2 = 2;
echo '<br>' . '$denominador_2 = ' . $denominador_2;
$fracao_2 = $numerador_2 / $denominador_2;
$fracao_2 = $fracao_2**2;
echo '<br>' . '$fracao_2 = ' . $fracao_2;

/**
 * Fração Principal
 */
print('<p><b> Fração Principal </b><br>');
$num_principal = $fracao_1 - $fracao_2;
$num_principal = $num_principal ** 3;
echo '$num_principal = ' . $num_principal;
$den_principal = 10 ** 3;
echo '<br>' . '$den_principal = ' . $den_principal;
$resultado = $num_principal / $den_principal;
echo '<br>' . '$resultado = ' . $resultado;



