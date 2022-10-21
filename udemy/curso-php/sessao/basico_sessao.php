<div class="titulo">Sessão</div>

<?php
echo 'session_start()'. session_start();
/**
 * Primeiro comando
 * tem a disposição a sessão
 * acessar os dados com o print_r
 */

print_r($_SESSION);

echo '<br>';

/**
 * Acrescentando informação sobre nome = igual acrescentar informação em um array
 */
if (!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Arthur';
}

/**
 * Acrescentando informação sobre email = igual acrescentar informação em um array
 */
if (!$_SESSION['email']) {
    $_SESSION['email'] = 'arthur@email.com';
}

print_r($_SESSION);
?>

<p>
    <a href = '/sessao/basico_sessao_alterar.php'>
      Alterar Sessão  
    </a>
</p>