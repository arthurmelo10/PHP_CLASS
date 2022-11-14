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
echo '$arquivo = fopen(teste.txt, r) <br>';
echo 'fread($arquivo, 10): ';
echo fread($arquivo, 10);
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
echo '$tamanho = filesize(teste.txt) => método para identificar o tamanho de um arquivo<br>'; 
echo 'Tamanho do arquivo = ' . $tamanho . ' bytes <br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';
echo '<p><b>Lendo o arquivo linha a linha</b></p>';
$arquivo = fopen('teste.txt', 'r');
echo 'fgets($arquivo) => método para ler o arquivo linha a linha <br>';
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
var_dump(fgets($arquivo)); 
echo '<br>';
echo fgets($arquivo) . '<br>';
fclose($arquivo);

echo '<hr>';
echo '<p><b>Lendo o arquivo, sem saber quantas linhas o arquivo tem</b></p>';
$arquivo = fopen('teste.txt', 'r');

echo '
<pre>
while (!feof($arquivo)) {
    echo fgets($arquivo);
}

feof  => método para ler o arquivo até o seu fim, independente do tamnnho das linhas
</pre>';
while (!feof($arquivo)) {
    echo fgets($arquivo), '<br>';
}

fclose($arquivo);

echo '<hr>';
echo '<p><b>Lendo o arquivo, caractere por caractere</b></p>';
$arquivo = fopen('teste.txt', 'r');
echo 
'<pre>
while (!feof($arquivo)) {
    echo fgetc($arquivo); => método para leitura caracter por caracter
}
</pre>';

while (!feof($arquivo)) {
    echo fgetc($arquivo);
}
echo  '<br>';
fclose($arquivo);

echo '<hr>';
echo '<p><b>Abrindo o arquivo no mode de leitura e de escrita</b></p>';

$arquivo = fopen('teste.txt', 'r+');
echo '$arquivo = fopen(teste.txt, r+), <br>';
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdicionado durante a leitura ");
fclose($arquivo);

echo "Fim!";