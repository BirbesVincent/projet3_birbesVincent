<?php

use Core\HTML\BootstrapForm;

if (!empty($_POST)){
    $auth = new \Core\Auth\DbAuth(App::getInstance()->getDb());
    if($auth->login($_POST['username'], $_POST['password'])){
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
    <?= $form->input('username', 'pseudo'); ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
    <button class="btn btn-primary">Envoyer</button>
</form>