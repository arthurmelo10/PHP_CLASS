<div class="titulo">Desafio PI</div>

<?php
print('<b>Comparação entre a função pi() e a variavel $pi </b><br>');
echo 'função pi() = '.pi().'<br>';
var_dump(pi());
$pi = 3.14;
echo '<br>variável $pi = '.$pi.'</br>';
var_dump($pi);

if ($pi === pi()) {
    echo "<br>São Iguais";
} else {
    echo "<br>São Diferentes";
}

//teste rápido
$piErrado = 2.8;
if ($piErrado === pi()) {
    echo "<br>São Iguais</br>";
} else {
    echo "<br>São Diferentes</br>";
}

//Resolução do exercício
$diferenca = pi() - $pi;
echo $diferenca . '<br>';
$diferenca_2 = $pi - $piErrado;
echo $diferenca_2 . '<br>';

if ($diferenca < 0.01) {
    echo '<br>Praticamente Iguais';
} else {
    echo '<br>Continuam Diferentes';
}

echo '<p><b>Utilizar a diferença entre as variáveis e utilizar como intervalos</b>';