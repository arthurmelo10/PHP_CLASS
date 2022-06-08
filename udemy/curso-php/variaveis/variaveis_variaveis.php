<div class="titulo">Variáveis Variáveis</div>

<?php
print('<b>Exemplo 1</b><br>');
$a = 'valorA';
$$a = 'valorAA';

//$ $a = 'valorAA';
$valorA = 'valorAA';


echo "$a {$$a} - para interepretar tem que ser utilizada a chave";
//para interepretar tem que ser utilizada a chave
echo "<br>$a {$$a} ${$a}";
// quando usar duas vezes o símbolo $ é como se pegasse o conteúdo da variável a e criasse uma variável com o nome valorA
echo "<br>$a {$$a} ${$a} $valorA -> " . 'variavel $valorA existe, pois está sendo utilizado o símbolo $ duas vezes';

print('<p><b>Exemplo 2</b><br>');
$epa = 'opa';
$opa = 'vish';
$vish = 'Eita !!!!';
echo "$epa {$$epa} {$$$epa}"; // pegar o conteúdo de $epa e utilizar como nome de variável
print('<p>Tanto na hora de definir a variável, utilizando 2 $, ou como na hora de usar a variável, consigo pegar o conteúdo da variável e procurar uma variável conm a mesma definição<br>');
// tanto na hora de definir a variável, utilizando 2 $, ou como na hora de usar a variável, consigo pegar o conteúdo da variável e procurar uma variável conm a mesma definição