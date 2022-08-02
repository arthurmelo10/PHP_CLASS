<div class="titulo">Argumento Padrão</div>

<?php
print('<b>Exemplo 1</b><br>');

echo 'O parâmetro ou argumento padrão apresenta um valor previo definido, na própria chamada da função<br>';

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente')
{
    return "Bem vindo, $nome $sobrenome !<br>";
}
echo '
<pre>
function saudacao($nome = "Senhor(a)", $sobrenome = "Cliente")
{
    return "Bem vindo, $nome $sobrenome !";
}
</pre>';

echo '<br>Chamando a função saudacao, sem passar nenhum parâmetro: ';
echo '<br>saudacao(): ';
echo saudacao();
echo '<br>Chamando a função saudacao, passando apenas um parâmetro NULL: ';
echo '<br>saudacao(NULL): ';
echo saudacao(NULL);
echo '<br>Chamando a função saudacao, passando dois parâmetros NULL,: ';
echo '<br>saudacao(NULL,NULL): ';
echo saudacao(NULL, NULL);
echo '<br>Chamando a função saudacao, passando dois parâmetros: ';
echo '<br>saudacao(Arthur,Melo): ';
echo saudacao('Arthur','Melo');

echo '<hr>';
print('<p><b>Exemplo 2</b><br>');

function anotarPedido($comida, $bebida = 'Água')
{
    echo "<br> Para comer: $comida";
    echo "<br> Para beber: $bebida";
}

echo '
<pre>
function anotarPedido($comida, $bebida = "Água")
{
    echo "Para comer: $comida";
    echo "Para beber: $bebida";
}
</pre>';

echo '<br>Chamando a função saudacao, sem passar nenhum parâmetro: ';
echo '<br>anotarPedido(): -> dá erro pois precisa do parâmetro de comida';
//anotarPedido();
echo '<br>';
echo '<br>Chamando a função saudacao, com parâmetro de comida: ';
echo '<br>anotarPedido(Pizza): ';
anotarPedido('Pizza');
echo '<br>';
echo '<br>Chamando a função saudacao, com parâmetro de comida e bebida: ';
echo '<br>anotarPedido(Pizza, Refri): ';
anotarPedido('Pizza', 'Refri');

echo '<hr>';
print('<p><b>Exemplo 3</b><br>');
echo 'Sempre colocar o parâmetro com valor padrão por último !!!';

function anotarPedido2 ($bebida = 'Água', $comida)
{
    echo "<br>Para comer: $comida";
    echo "<br>PAra beber: $bebida";
}

echo '
<pre>
function anotarPedido2 ($bebida = "Água", $comida)
{
    echo "Para comer: $comida";
    echo "PAra beber: $bebida";
}
</pre>';
echo '<br>anotarPedido2("Hamburguer") -> não vai funcionar pois tenho que obrigatoriamente passar dois parâmetros, já que o valor default está no primeiro parâmetro';
echo '<br> Chamando a função anotarPedido2("Refrigerante2", "Pizza2")';
anotarPedido2('Refrigerante2', 'Pizza2');