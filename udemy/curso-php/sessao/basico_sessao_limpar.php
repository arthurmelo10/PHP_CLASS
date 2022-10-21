<?php
/**
 * Sempre colocar a função session_start() quando queremos utilizar a sessão
 * Mesmo que seja para destruir a sessão
 */
session_start();

/**
 * Responsável por destruir a sessão
 */
session_destroy();

/**
 * Resposável por redirecionar a url para uma outra páginna, automáticamente
 */
header('Location: basico_sessao.php');

