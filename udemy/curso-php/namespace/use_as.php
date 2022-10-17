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

/**
 * A partir do use, eu não tenho conflito com a constante
 */

use Nome\Bem\Grande as ctx;
echo '<br>';
echo 'use Nome\Bem\Grande as ctx <br>';

echo 'soma(1,2) = ' . soma(1,2). '<br>';
/**
 * Aqui está sendo chamado especificamente a função soma do namespace atual, não há conflitosd, a partir do uso do use_as
 */

echo '<p>Aqui está sendo chamado especificamente a função soma do namespace atual, não há conflitos, a partir do uso do use_as</p>'; 

echo 'ctx\soma(1,2) = '.ctx\soma(1,2). '<br>';
/**
 * Aqui é função soma do arquivo base que está sendo chamado, e não a função soma do arquivo atual
 */

echo '<p>Aqui é função soma do arquivo base que está sendo chamado, e não a função soma do arquivo atual</p>'; 

//use function Nome\Bem\Grande\soma;
/**
 * Já existe uma função definida neste namespace, por isso devemos usar o use_as
 */

use function Nome\Bem\Grande\soma as somaReal;

echo 'use function Nome\Bem\Grande\soma as somaReal<br>';
echo 'somaReal(100,9) = '.somaReal(100,9);
echo '<p>Estou declarando a função soma da meu arquivo base, e não a função soma do arquivo atual</p>';


$a = new Classe();
$a->func();

echo '<br>';
//$b = new \Nome\Bem\Grande\Classe();
$b = new ctx\Classe();
$b->func();


echo '<br>';
use Nome\Bem\Grande\Classe as D;
$d = new D;
$d->func();
