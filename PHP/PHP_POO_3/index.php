<?php
require './app/autoload.php';

use EstBase\Routes;

Routes::getPage();

//Sempre que estamos trabalhando com namespace, é necessário passarmos o caminho completo aqui com o nome do namespace;

echo Routes::getHome();

//necessidade de rescrever a url, de forma amigável. htacess -> servidor PHP

