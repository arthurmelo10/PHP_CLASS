<div class="titulo">Lendo um Arquivo</div>

<?php
echo '<p><b>Exemplo 1 - Lendo um arquivo</b></p>';

/**
 * Ler o arquivo por partes, port bytes
 * Ler o arquivo linha por linha
 * Ler o arquivo inteiro
 * Ler o arquivo em laço while
 */

$arquivo = fopen('teste.txt', 'r');

echo fread($arquivo, 10);

echo '<br>';

echo fread($arquivo, 10);

fclose($arquivo);
/**
 * Ler por byte não é didático
 * Não sabemos quantos bites temos no arquivo
 * Ler linha por linnha ou ler inteiro (cuidado com o servidor)
 */

echo '<hr>';
echo '<p><b>Lendo o arquivo inteiro, verificando o tamanho do arquivo</b></p>';
$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt'); 
echo 'Tamanho do arquivo = ' . $tamanho . ' bytes <br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';
echo '<p><b>Lendo o arquivo linha a linha</b></p>';
$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
fclose($arquivo);
