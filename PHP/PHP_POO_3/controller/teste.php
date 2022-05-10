<?php

use EstBase\Template;
use EstBase\Routes;

//instanciando classe template
$template = new Template();

//passando valores para  template
$value = array(
    'NAME' => 'Carregando template teste_arthur',
    'PAGES' => Routes::getLinks(),
    'TEXTO' => 'Bem vindo ao projeto estrutura base em PHP'
);

// carregando o template
//$template->display('teste', $values);
echo $template->render('teste', $values); // para exibir é ncessário o echo