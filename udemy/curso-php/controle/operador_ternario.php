<div class="titulo">Operador Ternário</div>

<?php
print('<b>Exemplo 1 - if/else normal</b>');
$idade = 15;
echo '<br> $idade = '.$idade;
$status;

if ($idade >= 18) {
    $status = 'Maior de Idade';
} else {
    $status = 'Menor de Idade';
}

echo '<br>$status = '.$status;

print('<p><b>Exemplo 2 - operador ternário</b>');
$idade = 18;
echo '<br> $idade = '.$idade;
$status = $idade >=18 ? 'Maior de Idade' : 'Menor de Idade';
echo '<br>$status = $idade >=18 ? Maior de Idade : Menor de Idade;
</br>';
echo '$status = '.$status;

print('<p><b>Podemos igualar o valor de uma variável a um operador ternário. Desta forma, a variável automáticamente assume uma das respostas da condicional.</b>');

print('<p><b>Exemplo 3 - operador ternário aninhado</b>');
$idade = 45;
echo '<br> $idade = '.$idade;
$status = $idade >= 18 ? ($idade >= 65 ? 'Aposentado' : 'Maior de Idade') : 'Menor de Idade';
echo '<br> $status = $idade >= 18 ? ($idade >= 65 ? Aposentado : Maior de Idade) : Menor de Idade</br>';
echo '$status = '.$status;

print('<p><b>Exemplo 4 - operador ternário aninhado com duas variáveis</b>');
$idade = 70;
echo '<br> $idade = '.$idade;
$tipoMaioridade = $idade >= 65 ? 'Aposentado' : 'Maior de Idade';
echo '<br>$tipoMaioridade = $idade >= 65 ? Aposentado : Maior de Idade';
$status = $idade >= 18 ? $tipoMaioridade : 'Menor de Idade';
echo '<br>$status = $idade >= 18 ? $tipoMaioridade : Menor de Idade';
echo '<br>$status = '.$status;