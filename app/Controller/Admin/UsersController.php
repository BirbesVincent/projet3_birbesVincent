<?php

namespace App\Controller\Admin;

use Core\Auth\DbAuth;
use Core\HTML\BootstrapForm;
use \App;

/**
 * Class UsersController
 * @package App\Controller\Admin
 * use to allow admin to log in & log out
 */
class UsersController extends \App\Controller\AppController {

    /**
     * get a BootstrapForm object
     * check $_SESSION['auth_valid'] and log in or redirection
     * if $_POST is not empty compare username & password with db
     */
    public function login(){
                if (!isset($_SESSION['auth_valid'])){
                    $_SESSION['auth_valid'] = false;
                } if ($_SESSION['auth_valid'] === true){
                header('Location:index.php?p=admin.posts.index');
            }
                $errors = false;
                if (!empty($_POST)){
                    $auth = new DbAuth(App::getInstance()->getDb());
                    if($auth->login($_POST['username'], $_POST['password'])){
                        $_SESSION['auth_valid'] = true;
                        header ('Location: index.php?p=admin.posts.index');
                    } else {
                        $errors = true;
                    }
                }
            $form = new BootstrapForm($_POST);
            $this->render('users.login', compact('form', 'errors'));
    }

    /**
     * redirection to posts.index
     * set $_SESSION['auth_valid'] to false
     */
    public function logout(){
        $_SESSION['auth_valid'] = false;
        $controller = new App\Controller\PostsController();
        $controller->index();

    }


}