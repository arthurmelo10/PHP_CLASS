<div class="titulo">Include x Require</div>

<div>

Função require é bem parecida com a função iunclude <br>

    <ul>
        Diferença está em como o php lida com os erros de cada uma <br>
        <li>Include gera advertência</li>
        <li>Require gera erro fatal, caso o arquivo que esteja sendo chamado não exista => aplicação para</li>
        <ul>
            <li>É interessante usar o require, pois força a existência do arquivo</li>
        </ul>
    </ul>
</div>

<?php
 echo '
 <pre>
 /**
 * via de regra queremos ser notificados,<br> 
 * quando o arquivo não existe,<br> 
 * portanto é mais usual utilizar o require
 */
 </pre>';

echo '<hr>';

ini_set('display_errors', 1);

echo 'Usando include com arquivo inexistente ...<br>';
include('arquivo_inexistente.php');
echo '<br>Usando include com arquivo inexistente ...<br>';

echo '<p><strong>Aplicação não é derrubada pelo arquivo ser inexistente</strong></p>';

echo '<hr>';
echo 'Usando require com arquivo inexistente ...<br>';
echo '<p><strong>Aplicação é derrubada, e um erro fatal é apresentado</strong></p>';
require('arquivo_inexistente.php');
echo '<br>Usando require com arquivo inexistente ...<br>';


/**
 * via de regra quer ser notificado, quando o arquivo não existe, portanto é mais usual utilizar o require
 */



