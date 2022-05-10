<?php
require './app/autoload.php';

use EstBase\Routes;
use EstBase\Template;



//instacia o template
$template = new Template();

//valores para o template
$values = array(
    'PAGES' => Routes::getLinks()
);

// chamando template do topo
$template->display('index_top', $values);

//
Routes::getPage();

//Sempre que estamos trabalhando com namespace, é necessário passarmos o caminho completo aqui com o nome do namespace;

echo Routes::getHome();

//necessidade de rescrever a url, de forma amigável. htacess -> servidor PHP

