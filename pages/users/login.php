<?php

use Core\HTML\BootstrapForm;
    if (!isset($_SESSION['auth_valid'])){
        $_SESSION['auth_valid'] = false;
    } if ($_SESSION['auth_valid'] === true){
        header('Location:admin.php');
    }

    if (!empty($_POST)){
    $auth = new \Core\Auth\DbAuth(App::getInstance()->getDb());
    if($auth->login($_POST['username'], $_POST['password'])){
        $_SESSION['auth_valid'] = true;
        header ('Location: admin.php');
    } else {
        ?>
        <div class="alert alert-danger">
            Identifiants incorrects
        </div>
    <?php
    }
}

$form = new BootstrapForm($_POST); ?>
<form method="post">
    <?= $form->input('username', 'Pseudo'); ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
    <button class="btn btn-primary">Envoyer</button>
</form>