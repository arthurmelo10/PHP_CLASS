<?php

namespace EstBase;

// armazenar diveras informações
// 

class Config
{
    /**
     * bloco que define dados do site/app
     */
    const APP_URL = 'http://localhost'; //url base do site
    const APP_DIR_BASE = 'estrutura'; //diretório base da aplicação
    const APP_NAME = 'Estrutura base PHP Teste'; //Nome do projeto
    const APP_DIR_CONTROLLER = 'controller'; // pasta de controller
    const APP_DIR_VIEW = 'view'; // pasta de view
    const APP_DIR_THEME = 'theme'; // tema do projeto
    const APP_DIR_IMG = 'images'; // imagens do projeto

    /**
     * array ados de SMTP para envio de email
     */
     const SMTP = array(
         'HOST' => 'smtp.gmail.com', 
         'USER' => 'adrsite***cursos@gmail.com', //email para logar no servidor de email
         'NAME' => 'Sistema estrtura base PHP', // nome que aparece na caixa de mensagem dodestinatário
         'PASS' => '******', // senha da caixa de e-mail
         'PORT' => 587, // porta do servidor
         'AUTH' => true, //autenticação
         'SECURE' => 'tls', 
         'CC' => 'copia$meuemail.com', //
     );
     /**
      * array com dados do DB
      */
     const DB = array(

        'HOST' => 'localhost', 
        'USER' => 'root', // usuário do mysql
        'PASS' => '12345', 
        'DATABASE' => 'estrutura', // nome do banco de dados
        
     );
     //teremos uma classe de banco de dados que irá utilizar estas innformações

}