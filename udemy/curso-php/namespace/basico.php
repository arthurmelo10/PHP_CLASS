<?php
namespace contexto;

use const outro_contexto\CONSTANTE_4;

 ?>

<div class="titulo">Exemplo Básico</div>

<div>
    O namespace deve ser a primeira declaração dentro do arquivo PHP.<br>
    Antes mesmo do texto html.<br>
</div>

<?php
echo 'Constante para referenciar o namespace !!<br>';
echo '<strong>__NAMESPACE__</strong> = ';
echo __NAMESPACE__.'<br>';

echo '<hr>';

echo 'Chamando Constantes: <br>';
const CONSTANTE_1 = 123;

echo 'CONSTANTE_1 = '. CONSTANTE_1. '<br>';

echo '<br>';

define('contexto\CONSTANTE_2', 234);

echo 'define(contexto\CONSTANTE_2, 234) = '. CONSTANTE_2 . '<br>';
echo '<br>';
/**
 * função define precisa informar o cmainho completo (namespace, sub-namespace)
 * Sem colocar o namespace como parâmetro, a constante será cadastrada no namespace raiz do php
 * Se colocar o barra na freten, acessamos a constante presente na raiz = \CONSTANTE_2
*/

define(__NAMESPACE__. '\CONSTANTE_3', 345);

echo 'define(__NAMESPACE__. \CONSTANTE_3, 345) = '. CONSTANTE_3. '<br>'; 


//echo 'contexto\CONSTANTE_3 = '.contexto\CONSTANTE_3.'<br>';
echo '\contexto\CONSTANTE_3 = '.\contexto\CONSTANTE_3.'<br>';

 

echo 'constant(__NAMESPACE__.\CONSTANTE_3) = ' . constant(__NAMESPACE__.'\CONSTANTE_3') . '<br>';
echo '<br>';
/**
 * Essa chamada é relativa
 * COnceito sub-namespace => ncomo se fosse uma pasta dentro da outra 
 * <?php namespace contexto/a/sub/name; ?>
 * contexto/CONSTANTE_3 = forma relativa <=> \contexto\contexto\CONSTANTE_3
 * \contexto\CONSTANTE_3 = forma absoluta
*/

/**
 * Quando há conflitos de nome, ai temos que referenciar o namespace de forma explícita
 * Por padrão, acessamos o namespace atual ou namespace raiz
 */

define ('outro_contexto\CONSTANTE_4', 456);

echo ' define (outro_contexto\CONSTANTE_4, 456) = '. CONSTANTE_4. '<br>';

echo 'CONSTANTE_4 = '. CONSTANTE_4.'<BR>'; // consegui???
echo '\outro_contexto\CONSTANTE_4'. \outro_contexto\CONSTANTE_4 .'<br>'; //CAMINHO ABSOLUTO

echo '<hr>';

function soma($a, $b)
{
    return $a + $b;
}

echo '
<pre>
function soma($a, $b)
{
    return $a + $b;
}
</pre>';


echo '\contexto\soma(1,5) = '. \contexto\soma(1,5) . '<br>';
echo 'soma(3,7) = '. soma(3,7) . '<br>';
//echo '\soma(3,7) = '. \soma(3,7) . '<br>';
/**
 * A função soma é acessada pois está no namespace contexto
 * A função não pode ser acessada com \soma, pois ela não está no namespace da raiz do php
 */

ECHO '<HR>';
echo 'Exemplo de conflito !! <br>';
function strpos($str, $text)
{
    echo 'buscando o texto '. $text . ' em ' . $str . '<br>';
    return 1;  
}

echo '
<pre>
function strpos($str, $text)
{
    echo "buscando o texto . $text .  em  . $str"
    return 1;  
}
</pre>';

echo 'strpos(Texto genérico para busca, busca) = '. strpos('Texto genérico para busca', 'busca'). '<br>';
echo '\strpos(Texto genérico para busca, busca) = '. \strpos('Texto genérico para busca', 'busca'). '<br>';
/**
 * \strpos acessa a função da api do php
 * strpos acessa a função do namespace atual
 */

