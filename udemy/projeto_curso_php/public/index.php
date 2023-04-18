<?php
require_once(dirname(__FILE__, 2) . '/src/Config/config.php');

// pegar qualquer caracterer da resposta
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) // retira os parâmetros. sem levar em consideração os parâmetros da requisição
); 

if ($uri === '/' || $uri === '' || $uri === '/index.php') {
    $uri = '/loginController.php';
}

require_once(CONTROLLER_PATH . "$uri");
