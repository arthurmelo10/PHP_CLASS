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
        if (isset($_GET['page'])) {
            //Se existir o get url
            $url = $_GET['page'];

            //separa a url pela barra e transforma em um array
            self::$index_url = explode('/', $url);

            //define o nome do arquivo a ser carregado
            $file = Config::APP_DIR_CONTROLLER .'/'. self::$index_url[0].'php'; // o que recebe o nome da página

            //carrega o arquivo informado, caso exista
            if ($file) {
                include $file;
            } else {
                echo 'Pagina não existe' . $file;
            }
        } else {
            //caso não existe GET na url, mostra info da home
            echo 'não passei nada na GET, esta é a pagina home';
        }
    }   

    /**
     * @return string url home do projetp/site/app
     */
    public static function getHome()
    {
        return Config::APP_URL . '/' . Config::APP_DIR_BASE;
    }

    /**
     * @return string pasta da view
     */
    public static function getView()
    {
        return self::getHome() . '/' . Config::APP_DIR_VIEW;
    } 

    /**
     * @return string pasta do tema
     */
    public static function getTheme()
    {
        return self::getView() . '/' . Config::APP_DIR_THEME;
    }

    /**
     * array com todos os links
     */
    public static function getLinks()
    {
        $base = self::getHome();

        $links = array(
            'TESTE' => $base . '/teste',
            'CONTATO' => $base . '/contato'
        );

        return $links
    }



}