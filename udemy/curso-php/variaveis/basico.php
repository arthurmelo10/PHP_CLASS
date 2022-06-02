<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA); // conseguiu inspecionar o valor da variável

echo '<br>';
print('<p><b>Operações com variáveis</b><br>');
echo $a = 3;// é uma atribuição, como se tivesse reservando um endereço de memória que quero chamar de a
echo '<br>';
echo $b = 16;
echo '<br>';
$soma = $a + $b;
echo $soma;

print('<p><b>Verificar se a variável está setada</b><br>');
echo 'função isset: ';
echo isset($soma);
echo '<br>';
echo 'função unset: ';
unset($soma);
echo !isset($soma);
var_dump($soma);

print('<p><b>PHP - tipagem fraca</b><br>');
$variavel = 10;
echo '$variavel = '. $variavel;
$variavel = 'Agora sou string';
echo '<br>' . '$variavel = '. $variavel;

print('<p><b>Nomes de variáveis válidos</b><br>');
echo '$var = ' . $var = 'válida';
echo '<br>';
echo '$var2 = ' . $var2 = 'válida';
echo '<br>';
echo '$VAR3 = ' . $VAR3 = 'válida' ;
echo '<br>' . '$camelCase = ' . $camelCase = 'válida';
echo '<br>' . '$_var4_ = ' . $_var4_ = 'válida';
// o mais importante que é exista uma padronização
echo '<br>' . '$vâr5 = ' . $vâr5 = 'válida'; // evitar
echo '<br>' . '$6var = inválida';
echo '<br>' . '$%var7 = inválida';
echo '<br>' . '$var8% = inválida';

print('<p><b>Variáveis Pré Definindas</b><br>');
echo '$_GET - pega valores da requisição';
echo '<br>' . '$_SERVER';
var_dump($_SERVER["HTTP_HOST"]);
ECHO '<p><b>Consulte a documentação !!!</b></p>';



