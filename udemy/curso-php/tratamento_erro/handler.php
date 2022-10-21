<div class="titulo">Erro Handler</div>

<?php

use function contexto\strpos;

echo '
<p>
Gerenciador de erros do PHP
</p>';

/**
 * Utilizado para verificar se a aplicação já dá suporte um certo tipo de exceção
 * Como podemos personalizar e filtrar mensagens para serem exibidas
 */

/**
 * Serve para mostrar os erros e advertências serem printados nas telas
 * Podeoms filtrar, para por exemplo, somente mostrar erros e não advertência
 */
echo '<b>ini_set("display_errors", 1)</b>'.ini_set('display_errors', 1);
echo '<br>Serve para mostrar os erros e advertências serem printados nas telas<br>';
//echo 4/0 . '<br>';

/**
 * Função responsável por definir o nível de criticidade que deve ser reportado
 * Como a advertência está abaixo de erro, não será exibido as advertêcnias
 */

echo '<b>error_reporting()</b> = Função responsável por definir o nível de criticidade que deve ser reportado <br>';
echo '<p><b>error_reporting(E_ERROR)</b> = '.error_reporting(E_ERROR). '<br>';
echo 'Neste exemplo, serão apresentados somente os erros, e não as advertências(warnings)<br>'; 
echo '4/0 = '. 4/0 .'</p>';

/**
 * Mostra todos os erros e advertências gerados no comando passado
 */
echo '<p><b>error_reporting(E_ALL) = </b>'.error_reporting(E_ALL);
echo '<br>Mostra todos os erros e advertências gerados no comando passado<br>'; 
echo '4/0 = ' . 4/0 .'</p>';

/**
 * Operador de negação bit a bit
 * Não vai exibir nada
 */
echo '<p><b>error_reporting(~E_ALL) = </b>'.error_reporting(~E_ALL); 
echo '<br>Operador de negação bit a bit, não será exibido nada<br>';
echo '4/0 = ' . 4/0 .'</p>';

echo '<hr>';






echo '<p><b>Definindo uma função para jogar no error handler</b></p>';

error_reporting(E_ALL);
echo 4/0 . '<br>';

include ('inexistente.php');

/**
 * Se a função retornar true, a mensagem será filtrada
 * Se a função retornar false, a mensagem não será filtrada e será exibida no front
 * Verificar se a string de text tem determinados trechos de texto
 */
$filtrarMensagens = function($errno, $errstring): bool
{
    $text = 'include';
    return !!\strpos(" $errstring", $text);//dupla negação 

};

echo '
<pre>
function filtrarMensagens($errno, $errstring): bool
{
    $text = "include";
    return !!strpos(" $errstring", $text);

}
</pre>';

echo 'set_error_handler("filtrarMensagem", E_WARNING)'. set_error_handler($filtrarMensagens, E_WARNING);
/**
 * O erro definido dentro da função será filtrado, e não será apresentado no front
 */

echo  '9/0 = ' . 9/0 . '<br>';
include 'inexistente.php';



echo '<hr>';

echo '<p><b>Restaurar o erro handler</b></p>';

/**
 * POdemos restaurar o error handler para o estado inicial
 */

echo 'restore_error_handler() <br>';

restore_error_handler();

echo  '9/0 = ' . 9/0 . '<br>';
include 'inexistente.php';

/**
 * Uso de exceções é mais comum no ambiente de produção. 
 * No ambiente de desenvolvimento é factível para os prgramadores
 */