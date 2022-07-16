<div class="titulo">Argumentos & Retorno</div>

<?php
// Argumentos  = aquilo que vai pássar para a função ->: ingredientes da receita de bolo
// retorno = é a saída da função, é o resultado final, é o bolo
echo ' Argumentos  = aquilo que vai pássar para a função ->: ingredientes da receita de bolo.
       <br>retorno = é a saída da função, é o resultado final, é o bolo
    ';
echo '<hr>';
print('<p><b>Exemplo 1 - Função que não recebe nada de parâmetro de entrada, mas possui retorno</b><br>');

function obterMensagem()
{
    return 'Seja bem vindo(a)!<br>';
}
echo 'function obterMensagem()
<br>{
    <br>return "Seja bem vindo(a)!";
    <br>}';

ECHO '<br>';
obterMensagem();
// algoritimo que não recebe nada de parâmetro de entrada, mas possui retorno 
echo '<br>Ao chamar a função obterMensagem(), não é exibido nada na tela, pois é necessário ter chamado o <b>echo</b> para <b>printar</b> na tela';
// não é exibido nada na tela, pois é necessário ter chamado o echo para printar na tela

echo '<p>Chamando a função obterMensagem a partir de um echo: ';
echo '<br>echo obterMensagem(): '.obterMensagem();

// simplesmente chamar uma função não vai gerar nenhum, impacto na minha página

// atribuir o retorno de uma função associado a uma variável
// é possível armazenar o resulta de uma função em uma variável
echo '<p>Podemos também, atribuir o retorno de uma função a uma variável, de forma que o resultado da função fique armazenado na variável: <br>';
$mensagem = obterMensagem();
echo '$mensagem = obterMensagem()';
echo '<br>echo $mensagem: ';
echo $mensagem;
var_dump(obterMensagem());

print('<p>Temos as duas possibilidades, ter um echo na função ou o return. Quandop coloca o echo, a única utilidade da função é retornar o echo. 
Já com o return, podemos fazer mais ações, como armazenar em um variável ou enviar para o banco de dados, por exemplo (maior flexibilidade).');

echo '<hr>';
print('<p><b>Exemplo 2 - Função que recebe parâmetro de entrada e possui retorno</b><br>');

echo '<br>function obterMensagemComNome($nome)
<br>{
    <br>return "Bem vindo, {$nome}!";
    <br>}';
function obterMensagemComNome($nome)
{
    return "Bem vindo, {$nome}!";
}
 // o parãmetro passado permite a personalização da mensagem que será exibida na tela
echo '<br>O parâmetro passado permite a personalização da mensagem que será exibida na tela</br>';
// algoritmo mais completa - recebe um parametro e retorna uma string - parâmetro de entrada e retorno
echo 'Algoritmo mais completo - recebe um parametro e retorna uma string - <b>parâmetro de entrada e retorno</b></br>';
echo '<br>Chamando a função obterMensagemComNome() a partir de um echo: ';
echo '<br>echo obterMensagemcomNome(Arthur): '.obterMensagemComNome('Arthur');
echo '<br>echo obterMensagemcomNome(Djair): '.obterMensagemComNome('Djair');

echo '<hr>';

print('<p><b>Exemplo 3 - Função Soma</b><br>');

echo '<br>function soma($num1, $num2)
<br>{
    <br>return $num1 + $num2;
    <br>}';

function soma($num1, $num2)
{
    return $num1 + $num2;
}

echo '<br>echo soma(4,7): ', soma(4,7);
echo '<br>echo soma(45,78): ', soma(45,78);

echo '<hr>';

print('<p><b>Exemplo 4 - Passagem de parâmetros</b><br>');

$x = 4;
echo '$x = '.$x.'<br>';
$y = 5;
echo '$y = '.$y.'<br>';
echo 'echo soma($x, $y): '. soma($x,$y);
echo '<br>Quando passamos um valor de variável, passamos o seu valor de fato ou a sua referência?</br>';

function trocarValor($a, $novoValor) 
{
    $a = $novoValor;
    echo $a;
}
echo '<br>function trocarValor($a, $novoValor) 
<br>{
    <br>$a = $novoValor;
    <br>}';
$variavel = 1;
echo '<br>$variável = '.$variavel;
echo '<br>passar por referência - passar o endereço de memória';
trocarValor($variavel, 3);
echo '<br>trocarValor($variavel, 3) = ',trocarValor($variavel, 3);
echo '<br> $variavel após a função trocarValor: '. $variavel;
echo '<br><b>Por padrão, o PHP passa o valor da variável por cópia, por valor, então, o valor original da variável não será alterado, fora do escopo do função</b></br>';

echo '<p><b>Passar valor por referência</b><br>';
function trocarValorDeVerdade(&$a, $novoValor)
{
    $a = $novoValor;
    echo $a;
}
echo '<br>function trcarValorDeVerdade(&$a, $novoValor)
<br>{
    <br>$a = $novoValor;
    <br>}';
echo '<br> trocarValorDeVerdade($variavel, 5) = ',trocarValorDeVerdade($variavel, 5);
echo '<br>$variavel após a função trocarValorDeVerdade: '.$variavel;

echo '<br><b>A função consegue gerar impactos fora de seu escopo, quando passamos o valor do atributo por referência</b>';

echo '<p><b>No paradigma funcional, isso é arriscado, deve ser evitado</b><br>';
echo '<b>Tem que usar com cuidado (passagem de valor por referência no atributo das funções), pois pode gerar bugs</b>';
