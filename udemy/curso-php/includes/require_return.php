<div class="titulo">Require & Return</div>

<?php

//ini_set('display_errors', 1);

$valorRetorno = require('return_usado.php');
echo '$valorRetorno = require(return_usado.php)<br>';
echo "valor retorno = $valorRetorno<br>";

/**
 * Como o arquivo existe na aplicação, 
 * e possui retorno,
 * retorna o valor definido no arquivo 
 */

 echo '
 <pre>
 /**
 * Como o arquivo existe na aplicação, <br>
 * e possui retorno,<br>
 * retorna o valor definido no arquivo <br>
 */
 </pre>';

echo "$variavelRetornada<br>";


echo __DIR__.'<br>';

$valorRetorno_2 = require(__DIR__.'/return_nao_usado.php');
echo '$valorRetorno_2 = require(__DIR__./return_nao_usado.php)<br>';

echo '<br>';
//var_dump($valorRetorno_2);
echo "valorRetorno_2 = $valorRetorno_2<br>";

echo '
<pre>
/**
 * Como o arquivo não possui um retorno, <br>
 * mas existe dentro da aplicação, <br>
 * retorna 1, como sendo igual a verdadeiro <br>
 */
</pre>';

/**
 * Como o arquivo não possui um retorno, 
 * mas existe dentro da aplicação,
 * retorna 1, como sendo igual a verdadeiro
 */

echo "$variavelDeclarada<br>";