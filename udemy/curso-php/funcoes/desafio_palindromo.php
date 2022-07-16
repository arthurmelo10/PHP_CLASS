<div class="titulo">Desafio Palídromo</div>

<?php
print('<b>Criar uma função que detecte se a palavra é um palíndromo. Retornar uma string Sim e Não<n/b><br>');

/*
$variavel = 'Arthur';
echo '<br>'.$variavel;
echo '<br>'.strrev($variavel);
*/

function verifcarPalindromo($palavra)
{
    var_dump($palavra);
    if (!is_string($palavra)) {
        return 'Isto não é uma palavra';
    }
    echo '<br>A string passada é: '. $palavra;
    $novaPalavra = strtolower($palavra);
    $palavraReversa = strrev($novaPalavra);
    echo '<br> a string reversa é: '. $palavraReversa;
    
    if ($palavraReversa == $novaPalavra) {
        return '<br>SIM, é um palíndromo';
    }

    return '<br>NÃO é um palíndromo';
}

echo '<br>verifcarPalindromo("Arthur"): ',verifcarPalindromo('Arthur');
echo '<br>verifcarPalindromo("Ana"): ',verifcarPalindromo('Ana');
echo '<br>verifcarPalindromo("oVo"): ',verifcarPalindromo('oVo');
echo '<br>verifcarPalindromo(6.8): ',verifcarPalindromo(6.8);




