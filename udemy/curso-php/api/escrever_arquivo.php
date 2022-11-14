<div class="titulo">Escrevendo Arquivos</div>

<?php

echo '<p><b>Exemplo 1 - Criando um arquivo</b></p>';

/**
 * Tods as vezes que chamamos a função fopen, com a flag w, o arquivo é sobreescrito
 */

/**
 * funções para a criação de arquivos, diretamente no projeto
 * Flag w significa que o arquivo é passível de ser escrito
 */
$arquivo = fopen('teste.txt', 'w');
echo '$arquivo = fopen("teste.txt", "w") <br>';
/**
 * Função para escrever no arquivo novo gerado
 */
fwrite($arquivo, "Valor inicial\n");
echo 'fwrite($arquivo, "Valor inicial\n") <br>';
$str = "Segunda Linha \n";
echo '$str = "Segunda Linha \n" <br>';
fwrite($arquivo, $str);
echo 'fwrite($arquivo, $str) <br>';
fclose($arquivo);
echo 'fclose($arquivo) <br>';

echo '<hr>';

echo '<p><b>Sobreescrevendo o arquivo criado</b></p>';

$arquivo = fopen('teste.txt', 'w');
echo '$arquivo = fopen("teste.txt", "w") <br>';
fwrite($arquivo, "novo conteudo");
echo 'fwrite($arquivo, "novo conteudo") <br>';
fclose($arquivo);
echo 'fclose($arquivo) <br>';

echo '<hr>';

echo '<p><b>Adicionando texto no arquivo criado</b></p>';

/**
 * função fopen com a flag a, serve para adicionar texto em um arquivo pré existente
 */


$arquivo = fopen('teste.txt', 'a');
echo '$arquivo = fopen("teste.txt", "a") <br>';
fwrite($arquivo, " com novos valores \n");
echo 'fwrite($arquivo, " com novos valores \n") <br>';
fwrite($arquivo, "Adicionados em um segundo momento !");
echo 'fwrite($arquivo, "Adicionados em um segundo momento !") <br>';
fclose($arquivo);
echo 'fclose($arquivo) <br>';

/**
 * Vai gerar uma mensagem de erro
 * Boa opção para trabalhar com arquivos novos
 * Flag x exige um arquivo novo, que não exista
 * Arquivo existente vai gerar um warnings
 */

echo '<hr>';

echo '<p><b>Verificando a existência do arquivo chamado</b></p>';
ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x');
echo '$arquivo = fopen("teste.txt", "x") <br>';
