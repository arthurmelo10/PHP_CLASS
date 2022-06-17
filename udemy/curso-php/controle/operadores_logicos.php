<div class="titulo">Operadores Lógicos</div>

<?php
print('<b>Negação Lógica</b><br>');
echo 'var_dump(true) = ';
var_dump(true);
echo '<br>var_dump(!true) = ';
var_dump(!true);
echo '<br>var_dump(!!true) = ';
var_dump(!!true);
echo '<br><b>Cada vez que se usa um sinal de !, a condição de verdaeiro e falso é alterada</b>';
echo '<br>operador unário not(!) - em cima de um único elemento';

print('<p><b>Tabela Verdade AND</b><br><hr>');
echo 'Das duas condições analisadas, as duas devem ser verdade, para que uma situação ocorra</br>';
echo 'Se uma condição não for satisfeita, o resultado da expressão é falso</br>';
echo '<b>Exemplo Simples</b><br>';
echo 'var_dump(true && true) = ';
var_dump(true && true);
echo '<br>var_dump(true && false) = ';
var_dump(true && false);
echo '<br>var_dump(false && true) = ';
var_dump(false && true);
echo '<br>var_dump(false && false) = ';
var_dump(false && false);
echo '<br><b>Exemplo Complexo</b><br>';
echo 'var_dump(true and 3 > 2 and 7 <= 7) = ';
var_dump(true and 3 > 2 and 7 <= 7);
echo '<br>var_dump(true && 3 > 2 && 7 <= 7 && 3 === "3") = ';
var_dump(true && 3 > 2 && 7 <= 7 && 3 === "3");
echo '<p><b>Uma outra forma de representar uma condição lógica "e" é com "and" e 
a partir do momento que uma conndição é falsa, não é necessário analisar os demais operadores, pois o resultado já é falso</b>';

print('<p><b>Tabela Verdade OR</b><br><hr>');
echo 'Das duas condições analisadas, uma deve ser verdade, para que uma situação ocorra</br>';
echo '<b>Exemplo Simples</b><br>';
echo 'var_dump(true || true) = ';
var_dump(true || true);
echo '<br>var_dump(true || false) = ';
var_dump(true || false);
echo '<br>var_dump(false || true) = ';
var_dump(false || true);
echo '<br>var_dump(false || false) = ';
var_dump(false || false);
echo '<br><b>Exemplo Complexo</b><br>';
echo 'var_dump(true or 3 > 2 or 7 <= 7) = ';
var_dump(true or 3 > 2 or 7 <= 7);
echo '<br>var_dump(true || 3 > 2 || 7 <= 7 || 3 === "3") = ';
var_dump(true || 3 > 2 || 7 <= 7 || 3 === "3");

print('<p><b>Tabela Verdade XOR (Ou Exclusivo)</b><br><hr>');
echo 'As duas situações devem ser excludentes entre si, caso as duas sejam do mesmo tipo lógico, o resultado será falso</br>';
echo '<b>Exemplo Simples</b><br>';
echo 'var_dump(true xor true) = ';
var_dump(true xor true);
echo '<br>var_dump(true xor false) = ';
var_dump(true xor false);
echo '<br>var_dump(false xor true) = ';
var_dump(false xor true);
echo '<br>var_dump(false xor false) = ';
var_dump(false xor false);
echo '<br>Se substituirmos o "xor" por "!=" teremos a mesma tabela verdade</br>';
echo '<b>Exemplo com !=</b><br>';
echo 'var_dump(true != true) = ';
var_dump(true != true);
echo '<br>var_dump(true != false) = ';
var_dump(true != false);
echo '<br>var_dump(false != true) = ';
var_dump(false != true);
echo '<br>var_dump(false != false) = ';
var_dump(false != false);

print('<p><b>Exemplo</b><br><hr>');
$idade = 66;
echo '$idade = '. $idade;
$sexo = 'M';
echo '<br>$sexo = '. $sexo;

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo '<br>';
var_dump($podeAposentar);

if (!$podeAposentar) {
    echo '<br> Vai trabalhar vagabundo';
} else {
    echo '<br> Pode se Aposentar';
}

// if ($idade >= 60 && $sexo === 'F') {
//     echo "<br>pode aposentar -> $sexo";
// } else if ($idade >= 65 && $sexo === 'M') {
//     echo "<br>pode se aposentar -> $sexo";
// } else {
//     echo '<br>Vai ter que trabalhar mais um pouco ...';
// }

?>

<style>
    p {
        margin-bottom: 0px;
        font-weight: bold;
    }

    hr {
        margin-top: 0px;
    }
</style>