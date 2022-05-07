<?php

namespace EstBase;

class Routes
{
    //tratar toda a questão da url e a passagem de dados via barra de navegação do navegador
    /**
     * @var array índices da url 
     */
    public static $index_url = array(); // array de informações | url amigável

    /**
     * Faz a separação da URL e carrega as páginas
     */
    public static function getPage() //responsável por receber e tratar a url e informar qual a página que estamos solicitando no momento
    {
        //vai fazer uma veriificação se foi passado algo na url
        if (isset($_GET['url'])) {
            //Se existir o get url
            $url = $_GET['url'];

            //separa a url pela barra e transforma em um array
            self::$index_url = explode('/', $url);

            //define o nome do arquivo a ser carregado
            $file = Config::APP_DIR_CONTROLLER .'/'. self::$index_url[0].'php';

            //carrega o arquivo informado, caso exista
            if ($file) {
                include $file;
            } else {
                echo 'Pagina não existe' . $file;
            }
        } else {
            //caso não existe GET na url, mostra info da home
            echo 'pagina home';
        }
    }   
}