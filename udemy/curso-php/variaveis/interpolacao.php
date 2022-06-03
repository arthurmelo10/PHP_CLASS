<div class="titulo">Interpolação</div>

<?php
print('<b>Aspas simples e Aspas duplas</b><br>');
$numero = 10;
echo $numero;
echo '<br> com aspas simples = $numero';
//no caso de strings com delimitador de aspas simples, não vai interpretar o valor da variável
//interpolação é exatamente o nome dado para reso9lver, interpretar uma variável dentro de um contexto
echo "<br> com aspas duplas = $numero";
echo "<br> com aspas duplas = $numero + 1"; // não é feita a conta

$texto = "sua nota é: $numero";
echo "<br> $texto";

print('<p><b>Outros exemplos: Chaves</b><br>');
$objeto = 'caneta';
echo "<br>Sem chaves = Eu tenho 5 $objeto s";
echo "<br>Com chaves = Eu tenho 5 {$objeto}s.";
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s";
//espaço inicial não funciona corretamente
// padrão é colocar as chaves juntas do nome da variável

print('<p><b>Com aspas simples não vai interpolar, com aspas duplas vai</b><br>');
echo "<br> $numero";
//echo "<br> {$numero+1}"; -> no java script isto funciona, mas no php não;