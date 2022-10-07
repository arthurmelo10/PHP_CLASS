<div class="titulo">Include Once</div>

<?php

ini_set('display_errors', 1);
echo 'include(include_once_arquivo.php): <br>';
include('include_once_arquivo.php');
echo '<br>';
echo 'require(include_once_arquivo.php):';
require('include_once_arquivo.php');

echo "Variável = '{$variavel}'.<br>";
$variavel = 'Variável Alterada';
echo "Variável = '{$variavel}'.<br>";

include('include_once_arquivo.php');

echo "Variável = '{$variavel}'.<br>";
echo 'A variável é redeclarada, visto que o arquivo foi chamado novamente !!<br>';
$variavel = 'Variável Alterada Novamente';
echo "Variável = '{$variavel}'.<br>";

echo '<hr>';

echo "include_once('include_once_arquivo.php')<br>";
include_once('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";
echo 'Variável não é reinicializada, com o uso do include_once<br>';
echo 'Não é necessário fazer a "proteção" da função, quando usamos o include_once';
echo '<br>';
echo "require_once('include_once_arquivo.php')<br>";
require_once('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";

echo 'A partir do uso do once, não e mais necessário proteger a função, <br>pois o mesmo garante que a função não será redeclarada<br>';

