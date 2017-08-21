<?php

namespace App\Controller\Admin;

use Core\Auth\DbAuth;
use Core\HTML\BootstrapForm;
use \App;

class UsersController extends \App\Controller\AppController {

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

    public function logout(){
        $_SESSION['auth_valid'] = false;
        $controller = new App\Controller\PostsController();
        $controller->index();

    }


}