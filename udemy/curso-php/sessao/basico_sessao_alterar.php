<?php
session_start();

print_r($_SESSION);
?>

<?php
/**
 * Alterar o valor da sesssão é como alterar o valor de um array
 */
$_SESSION['email'] = 'arthurbm_10@email.com';
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome']?>
    <br>
    <b>Email: </b> <?= $_SESSION['email']?>
</p>

<p>
    <a href = 'basico_sessao.php'>
        Voltar
    </a>
</p>

<p>
    <a href = 'basico_sessao_limpar.php'>
        Limpar Sessão
    </a>
</p>
método para destruir a sessão



