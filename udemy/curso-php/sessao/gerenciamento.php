<div class="titulo">Gerenciamento de Sessão</div>

<?php

/**
 * Posso pegar o Id da sessão original e passar como parâmetro para a função session_id()
 * Desta forma, todos os browsers que estiverem com a mesma url, ficará com as mesmas informações do original (sessão compartilhada)
 * Para fazer isso, sempre colocar antes da função session_start()
 */
//session_id('ikh813ngh7uocjqgaccubpa8pv');

session_start();

echo 'session_start()<br>';
/**
 * Obtendo o id da sessão
 */
echo 'Obtendo o id da sessão: <br>';
echo 'session_id: '. session_id();
//red55vaj6qtpgbdag8opkn72tg

/**
 * Uma das formas de modificar a sessão é usando referência de memória
 */
$contador = &$_SESSION['contador'];

$contador = $contador ? $contador +1 : 1;

echo '<br>'. $contador;

/**
 * Em um outro navegador, abrir a mesma url 
 * e verificar que a sessão está difernete, considerando id e contador
 */



echo '<hr>';
echo 'Gerar um nov id para a sessão<br>';

if ($contador % 5 === 0) {
    /**
     * função responsável por gerar um novo id para a sessão
     * possibilidade de descompartilar a sessão entre os browsers
     */
    session_regenerate_id();
}

echo '
<pre>
if ($contador % 5 === 0) {
    /**
     * função responsável por gerar um novo id para a sessão
     * possibilidade de descompartilar a sessão entre os browsers
     */
    session_regenerate_id();
}
</pre>';

echo '<hr>';
echo 'Limpar a sessão<br>';

if ($_SESSION['contador'] >= 15) {
    /**
     * função responsável por limpar a sessão
     */
    session_destroy();
}

echo '
<pre>
if ($_SESSION[contador] >= 15) {
    /**
     * função responsável por limpar a sessão
     */
    session_destroy();
}
</pre>';

/**
 * Toda sessão tem um ID
 * Se alguém tiver o id, pode se passar pelo usuário
 * Para segurança, é importante este ID ser regenerado
 */