<div class="titulo">Atribuições</div>

<?php
$title = 'Atribuição Simples';
echo ' = ' . $title;

print('<p><b>Exemplos de Atribuição Simples</b><br>');
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

print('<p><b>Outros tipos de atribuição, com variáveis númericas</b><br>');
$numero -= 5; // atribuição subtrativa -> estou retirando 5 unidades do valor do número 
echo '<br>' . '$numero-=5 -> '. $numero;
$numero += 5; // atribuição aditiva
echo '<br>' . '$numero+=5 -> '. $numero;
$numero *= 10; // atribuição multiplicativa
echo '<br>' . '$numero*=10 -> '. $numero;
$numero /= 5; // atribuição divisiva 
echo '<br>' . '$numero/=5 -> '. $numero;
$numero %= 6; // atribuição divisiva 
echo '<br>' . '$numero%=6 -> '. $numero;
$numero **= 3; // atribuição com potência 
echo '<br>' . '$numero**=3 -> '. $numero;
$numero  .=3; // apenas uma concatenação do número 3 com a variável número 
echo '<br>' . '$numero.=3 -> '. $numero;

print('<p><b>Outros tipos de atribuição, com variáveis tipo string</b><br>');
$texto = 'Esse é um texto';
echo '<br> $texto = ' . $texto;
$texto = $texto . ' qualquer';
echo '<br> $texto = $texto . qualquer -> ' . $texto;
$texto .= ' de verdade!';
echo '<br> $texto .= qualquer -> ' . $texto;

print('<p><b>Valor Padrão</b><br>');
//$variávelInexistente = 'valor existente';
echo '<br>' . $variávelInexistente;
//var_dump($variávelInexistente);
$valor = $variávelInexistente ?? 'valor default'; // COALESCE -> se existir a avariavel, vai usar a variável. se não existir vai usar o valor default
echo '<br>' . $valor;
print('<br><b>uso do coalesce pode favorecer na atribuição de um valor padrão para a variável, pois se a variável não existir ou for nula, será atribuído o valor default </b></br>');




