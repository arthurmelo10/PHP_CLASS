<?php namespace Outro\Nome; ?>

<div class="titulo">Use/As</div>


<?php

echo 'Namespace atual: '.__NAMESPACE__.'<br>';

include_once('use_as_arquivo.php');

function soma($a, $b)
{
    return $a.$b; // erro proposital
}

class Classe 
{
    public $var;

    public function func() 
    {
        echo  __NAMESPACE__ . '-> ' . __CLASS__ . '-> ' . __METHOD__; 
    }
}

echo '<p>Acessando uma constante declarada no arquivo de apoio</p>';

echo '\Nome\Bem\Grande\CONSTANTE = '.\Nome\Bem\Grande\CONSTANTE. '<br>';

echo '<br>Para acessar a constante criada em outro arquivo, 
<br>é necessário passar o caminho absoluto para obter o valor da mesma';

echo '<hr>';

echo '<p>Usando a palavra <strong>Use</strong></p>';

use const Nome\Bem\Grande\CONSTANTE;
/**
 * Não precisa usar o caminho absoluto para verificar  
 */
echo 'use const Nome\Bem\Grande\CONSTANTE<br>';

echo 'CONSTANTE = '.CONSTANTE;

