<div class="titulo">Função & Escopo</div>

<?php
print('<b>Exemplo 1</b>');
// conceito de função é você ter uma sequência de passos e com nome definido, de tal forma que seja possível chamar novamente esta sequência e reutiulizar código
// Escolha de nomes é uma coisa muito importante - Simplificação do problema
echo '<p>Conceito de função é você ter uma sequência de passos (algoritmo) e com nome definido, de tal forma que seja possível chamar novamente esta sequência e reutilizar código.
    <br>Escolha de nomes é uma coisa muito importante - <b>Simplificação do Código</b></p>';
function imprimirMensagem()
{
    echo '<br>Olá!';
    echo '<br>Até a próxima!';
}
print('<br>Chamando a função imprimirMensagem(): ');
echo '<pre>
<b>function imprimirMensagem()
    {
        echo "Olá!";
        echo "Até a próxima!";
    }
</b></pre>';
imprimirMensagem();
imprimirMensagem();
imprimirMensagem();


echo '<hr>';
print('<p>ESCOPO</p>');

echo 'Existem diferenças entre criar variáveis em um aruivo PHP e criar variáveis dentro de métodos/funções<br>';

$variavel = 1;
echo '$variavel = '. $variavel;

function trocarValor() {
    $variavel = 2;
    echo "Durante o método/função o valor da variável é $variavel";
}

echo "<br>Antes: variavel =  $variavel </br>";
trocarValor();
echo '<b><br>function trocarValor() 
    <br>{
    <br>$variavel = 2;
    <br>echo "Durante o método/função o valor da variável é $variavel";
    <br>}</b>';
echo "<br>Depois: variavel = $variavel";

echo '<p> O valor da variavel é alterado somente no escopo dentro do método -> <b>VARIÁVEL LOCAL</b>.
      <br> A variavel de dentro da função não é a mesma variável de fora da função, apesar de ter os mesmos nomes
      <br> Escopos diferentes  !! -> endereço de memória diferentes
      <br> O valor só estará disponível se a função <b>retornar</b> o valor de dentro dela</p>'; 

function trocarValorDeVerdade() 
{
    global $variavel;
    $variavel = 3;
    echo "Durante o método/função o valor da variável é $variavel";
}
echo "<br>Antes: variavel =  $variavel </br>";
trocarValorDeVerdade();
echo '<b><br>function trocarValorDeVerdade() 
<br>{
    <br>global $variavel;
    <br>$variavel = 3;
    <br>echo "Durante o método/função o valor da variável é $variavel";
    <br>}</b>';
echo "<br>Depois: variavel = $variavel";

echo '<p>A palavra <b>global</b> faz a função trcarValorDeVerdade acessar a variável que está declarada fora dela. Desta forma, seu valor é alterado, após a chamada da função -> <b>VARIÁVEL GLOBAL</b>.';

echo '<br>';
var_dump(trocarValorDeVerdade());
    