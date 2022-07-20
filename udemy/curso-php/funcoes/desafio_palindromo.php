<div class="titulo">Desafio Palídromo</div>

<?php
print('<b>Criar uma função que detecte se a palavra é um palíndromo. 
Retornar uma string Sim e Não</b><br>');

/*
$variavel = 'Arthur';
echo '<br>'.$variavel;
echo '<br>'.strrev($variavel);
*/

function verifcarPalindromo($palavra)
{
    //var_dump($palavra);
    if (!is_string($palavra)) {
        return 'Isto não é uma palavra';
    }
    // echo '<br>A string passada é: '. $palavra;
    $novaPalavra = strtolower($palavra);
    // $palavraReversa = strrev($novaPalavra);
    // echo '<br> A string reversa é: '. $palavraReversa;
    
    return $novaPalavra === strrev($novaPalavra) 
        ? 'SIM, é um palíndromo' 
        : 'NÃO é um palíndromo';
    // if ($palavraReversa === $novaPalavra) {
    //     return '<br>SIM, é um palíndromo';
    // }

    // return '<br>NÃO é um palíndromo';
}
echo '<p><b>function verifcarPalindromo($palavra)
<br>{
    <br>if (!is_string($palavra)) {
        <br>return "Isto não é uma palavra";
    <br>}
    <br>echo "A string passada é: ". $palavra;
    <br>$novaPalavra = strtolower($palavra);
    <br>$palavraReversa = strrev($novaPalavra);
    <br>echo "a string reversa é: ". $palavraReversa;
    
    <br>if ($palavraReversa == $novaPalavra) {
        <br>return "<br>SIM, é um palíndromo";
    <br>}

    <br>return "NÃO é um palíndromo";
<br>}</b></p>';
echo '<br>verifcarPalindromo("Arthur"): ',verifcarPalindromo('Arthur');
echo '<br>verifcarPalindromo("Ana"): ',verifcarPalindromo('Ana');
echo '<br>verifcarPalindromo("oVo"): ',verifcarPalindromo('oVo');
echo '<br>verifcarPalindromo(6.8): ',verifcarPalindromo(6.8);
echo '<br>verifcarPalindromo("abccba"): ',verifcarPalindromo("abccba");

print('<p><b>Resposta Professor</b><br>');
function palindromo($palavra) 
{
    $ultimoIndice = strlen($palavra) - 1; // tamanho da string -1 para pegar o último indice do array que a string é convertida
    for ($i = 0; $i <= $ultimoIndice; $i++) {
        if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}
echo '<b><br>function palindromo($palavra) 
<br>{
    <br>$ultimoIndice = strlen($palavra) - 1; 
        <br>for ($i = 0; $i <= $ultimoIndice; $i++) {
            <br>if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
                <br>return "Não";
            <br>}
        <br>}
    <br>return "Sim";
<br>}</b>';
echo '<br>Chamando a função palíndromo -> palídormo("arara"): ', palindromo('arara').'<br>';
echo '<br>Chamando a função palíndromo -> palídormo("BOLA"): ',palindromo('BOLA').'<br>';

// a string pode ser analisada como array, e assim vamos comparando posição por posição, o que siginifica coparar letra por letra

function palindromoSimples ($palavra) 
{
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo '<b><br>function palindromoSimples ($palavra) 
<br>{
    <br>return $palavra === strrev($palavra) ? "Sim" : "Não";
    <br>}</b>';
echo '<br>Chamando a função palíndromoSimples -> palídromoSimples("arara"): ', palindromoSimples('arara').'<br>';
echo '<br>Chamando a função palíndromoSimples -> palídromoSimples("BOLA"): ',palindromoSimples('BOLA').'<br>';

