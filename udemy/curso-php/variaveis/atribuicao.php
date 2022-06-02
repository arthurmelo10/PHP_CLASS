<div class="titulo">Atribuições</div>

<?php
$title = 'Atribuição Simples';
echo ' = ' . $title;

print('<p><b>Exemplos de Atribuição</b><br>');
$numero = 10;
echo '<br>' . '$numero = '. $numero;
$numero = $numero - 3;
echo '<br>';
var_dump($numero);
echo '<br>' . '$numero = '. $numero;
$numero = $numero + 1.5;
echo '<br>' . '$numero = '. $numero;
echo '<br>';
var_dump($numero);

print('<p><b>Exemplos de Atribuição decremento e incremento</b><br>');
echo '<br><b>Decremento</b>';
$numero--; // notação pós-fixada | $numero = $numero -1
echo '<br>' . '$numero-- = '. $numero;
// podemos utilizar em variáveis e não em valores literais;
--$numero; // notação pré-fixada | $numero = $numero -1
echo '<br>' . '--$numero = '. $numero;
echo '<br><b>Incremento</b>';
$numero++;// $numero = numero + 1
echo '<br>' . '$numero++ = '. $numero;
++$numero;// $numero = numero + 1
echo '<br>' . '++$numero = '. $numero;

print('<p><b>Outros tipos de atribuição</b><br>');
$numero -= 5;
echo '<br>' . '$numero-=5 -> '. $numero;



