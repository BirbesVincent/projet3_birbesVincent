<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

/**
 * Class AppController
 * @package App\Controller
 */
class AppController extends Controller {

    /**
     * @var string
     * set the name of the layout for render()
     */
    protected $template = 'default';

    /**
     * AppController constructor.
     * set the path for the views
     */
    public function __construct(){
        $this->viewPath = ROOT . '/app/Views/';
    }

    /**
     * @param $model_name
     * get the table with model_name
     */
    protected function loadModel($model_name){
        $this->$model_name = App::getInstance()->getTable($model_name);
    }
    /**
     * redirection to 403
     */
    public function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('Accès interdit');
    }

    /**
     * redirection
     * not use
     */
    public function notFound(){
        header('HTTP/1.0 404 Not Found');
        echo 'Page introuvable';
    }
}