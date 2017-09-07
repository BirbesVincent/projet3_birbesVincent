<?php

namespace App\Controller\Admin;

use \App;
use Core\Auth\DbAuth;

/**
 * Class AppController
 * @package App\Controller\Admin
 * use to check if user is allow to access admin panel
 */
class AppController extends \App\Controller\AppController {

    /**
     * @var string define the path to the layout
     */
    protected $template = '../admin/templates/default';

    /**
     * AppController constructor.
     * construct app object / link to the db / check for authentification
     */
    public function __construct()
    {
        parent::__construct();
        $app = App::getInstance();
        $auth = new DbAuth($app->getDb());
        if(!$auth->logged()){
            $this->forbidden();
        }
    }

}