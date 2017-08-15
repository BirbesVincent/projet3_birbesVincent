<?php

use Core\HTML\BootstrapForm;

$postTable = App::getInstance()->getTable('Article');

if (!empty($_POST)){
    $result = $postTable->create([
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ]);

    if($result){
        header('Location: admin?p=home');
        $_SESSION['create_article'] = true;
    }
} ?>

<a href="admin.php" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Retour au menu</a>

<?php
$form = new BootstrapForm($_POST); ?>

<form method="post" style="padding-top: 2%;padding-bottom: 2%;">
    <?= $form->input('title', 'Titre de l\'article'); ?>
    <?= $form->input('content', 'Contenu', ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Envoyer</button>
</form>