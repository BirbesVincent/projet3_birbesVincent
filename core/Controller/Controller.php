<?php

namespace Core\Controller;

/**
 * Class Controller
 * @package Core\Controller
 * mother class
 */
class Controller {

    /**
     * @var
     */
    protected $viewPath;
    /**
     * @var
     */
    protected $template;

    /**
     * @param $view html page
     * @param array $vars values send to the view
     * create view using values and send to client with default template
     */
    protected function render($view, $vars =[]){
        ob_start();
        extract($vars);
        require($this->viewPath . str_replace('.','/', $view). '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'templates/' . $this->template . '.php');
    }

    /**
     * redirection
     * not use
     */
    protected function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('Accès interdit');
    }

    /**
     * redirection
     * not use
     */
    protected function notFound(){
        header('HTTP/1.0 404 Not Found');
        die('Page introuvable');
    }
}