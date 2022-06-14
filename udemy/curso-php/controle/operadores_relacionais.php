<div class="titulo">Operadores Relacionais</div>

<?php
print('<b>Exemplo 1 (dados do mesmo tipo): </b>');
echo'<br> sinal de == é de comparação 1 == 1 ->  ';
echo '<br> sinal > (maior) : 4 > 1 -> ' . var_dump(1 == 1);
echo '<br> sinal >= (maior ou igual) : 4 >= 1 -> ' . var_dump(4 > 1);
echo '<br> sinal < (menor) : 4 < 1 -> ' . var_dump(4 >= 1);
echo '<br> sinal <= (menor ou igual) : 4 <= 1 -> ' . var_dump(4 < 1);
echo '<br> sinal != (diferente) : 1 != 1 -> ' . var_dump(4 <= 1);
echo '<br> sinal <> (diferente) : 1 <> 1 -> ' . var_dump(1 != 1);
var_dump(1 != 1);

echo '<br><b>Os operadores relacionais retornam verdadeiro ou falso para as conmparações realizadas</b></br>';

print('<p><b>Exemplo 2 (dados diferentes): </b>');
echo '<br> 1 == "1" -> ';
var_dump(1 == "1");
echo '<br> 1 === "1" -> ';
var_dump(1 === "1");
echo '<br><b>Sinal de === é uma comparação estrita, compara valor e o tipo do dado</b></br>';
echo '<br> 1 != "1" -> ';
var_dump(1 != "1");
echo '<br> 1 !== "1" -> ';
var_dump(1 !== "1");
echo '<br><b>Sinal de !== é uma comparação estrita, compara valor e o tipo do dado</b></br>';

print('<hr><p><b>Relacionais no If/Else: </b><br>');
$idade = 65;
if ($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if ($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade! = $idade anos";
}

print('<hr><p><b>Operador Spaceship: </b><br>');
echo '5 <=> 3 -> ';
var_dump(5 <=> 3);
echo '<br> 5 <=> 5 -> ';
var_dump(5 <=> 5);
echo '<br> 5 <=> 6 -> ';
var_dump(5 <=> 6);

// muito útil para fazer uma ordenação entre números, saber ser um número é menor/maior/igual do que outro
// quando estamos trabalhando com ordenação, spaceship é uma forma interessante de falar isso

print('<br> muito útil para fazer uma ordenação entre números, saber ser um número é menor/maior/igual do que outro');
print('<br> quando estamos trabalhando com ordenação, spaceship é uma forma interessante de falar isso');

print('<hr><p><b>Valores pode ser verdadeiro ou falso </b><br>');
echo '!!5 -> ';
var_dump(!!5);
echo '<br>!!0 -> ';
var_dump(!!0);
echo '<br>!!"" -> ';
var_dump(!!"");
echo '<br>!!" " -> ';
var_dump(!!" ");
