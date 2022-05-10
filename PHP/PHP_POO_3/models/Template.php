<?php
namespace EstBase;

/**
 * classe que trata dos templates
 * 
 * @author Adriano Souza - adrianosites.com.br
 */
class Template 
{
    private $loader,
            $twi,
            $ext = '.twig',
            $view,
            $debug = false,
            $cache = false;
    
    public function __construct()
    {
        $this->view = Routes::getRoot(). '/' .Config::APP_DIR_VIEW;

                $this->loader = new \Twig_Loader_Filesystem($this->view);
                $this->twig = new \Twig_environment($this->loader, array(
                    'cache' => $this->view.'/cache',
                    'cache' => $this->cache,
                    'debug' => $this->debug
                ));
            $this->twig->addExtension(new \Twig_extension_debug());        

    }

    /**
     * @param string $file nome do arquivo
     * @param array $values dados para o template
     * @return template
     */
    // mostra o template na tela
    public function display($file, $values)
    {
            $template = $this->twig->load($file . $this->ext);
            return $template->display($values);
    }

    /**
     * @param string $file nome do arquivo
     * @param array $values dados para o template
     * @return template
     */
    //empacota mas não exibe
    public function render($file, $values)
    {
        $template = $this->twig->load($file . $this->ext);
        return $template->render($values);
    }
}