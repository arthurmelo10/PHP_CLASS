<?php
require './app/autoload.php';

use EstBase\Config;
use EstBase\Routes;
use EstBase\Template;

//instacia o template
$template = new Template();

//valores para o template
$values = array(
    'PAGES' => Routes::getLinks(),
    'THEME' => Routes::getTheme(),
    'NAME' => Config::APP_NAME,
);

// chamando template do topo
$template->display('index_top', $values);

// carregando as páginas na url
Routes::getPage();

//Sempre que estamos trabalhando com namespace, é necessário passarmos o caminho completo aqui com o nome do namespace;

echo Routes::getHome();

//necessidade de rescrever a url, de forma amigável. htacess -> servidor PHP

// chamando o template do footer
$template->display('index_footer', $values);
