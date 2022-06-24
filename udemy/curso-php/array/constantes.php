<div class="titulo">Arrays Constantes</div>

<?php
print('<b>Exemplo 1</b>');

const FRUTAS = [
    'laranja',
    'abacaxi',
];
echo '<br> const FRUTAS = [ "laranja", "abacaxi",] = ';
print_r(FRUTAS);


print("<p><b>Alterar elemento do array</b><br>");
echo '<br>Não é possível alterar os elementos de um array constante, com em <b>FRUTAS[0] = "banana"</b>. O código quebrará';

print("<p><b>Inserir elemento do array</b><br>");
echo 'Não é possível inserir novos elementos em um array constante, com em <b>FRUTAS[] = "banana"</b>. O código quebrará';

print("<p><b>Ler elementos do array</b><br>");
echo 'FRUTAS[0] = '.FRUTAS[0];


print("<p><b>Excluir elemento do array</b><br>"); 
echo '
    Não é possível remover elementos em um array constante, com em <b>unset(FRUTAS[0])</b>. 
    O código quebrará.
    <br> Também não é possíveln utilziar a funação unset(FRUTAS), para remover o array completo.     
</BR>'; 

var_dump(FRUTAS);
print('<p><b>Exemplo 2</b>');

const CARROS = [
    "Fiat" => "Uno",
    "Ford" => "Fiesta",
];
echo '<br> const CARROS = [
    "Fiat" => "Uno",
    "Ford" => "Fiesta",
] = ';
print_r(CARROS);
echo '<br>CARROS["Fiat"] = '.CARROS["Fiat"];

print('<p><b>Exemplo 3</b>');
echo 'Outra forma de criar arrays constantes é com a função define() ->  define("CIDADES", array("BH", "Recife")) =  ';
define('CIDADES', array('BH', 'Recife'));
print_r(CIDADES);
echo '<br>CIDADES[1] = '.CIDADES[1];


print('<p><b>O conteúdo interno do array é constante, não é possível alterar valores, acrescentar valores ou remover </b>');