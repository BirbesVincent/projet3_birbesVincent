<?php

use Core\HTML\BootstrapForm;

$postTable = App::getInstance()->getTable('Article');

if (!empty($_POST)){
    $result = $postTable->create([
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ]);

    if($result){

        header('Location: admin?p=posts.edit&id=' . App::getInstance()->getDb()->lastInsertId());
        ?>
        <div class="alert alert-success">L'article à bien été ajouté !</div>
        <?php
    }
}

$form = new BootstrapForm($_POST); ?>

<form method="post">
    <?= $form->input('title', 'Titre de l\'article'); ?>
    <?= $form->input('content', 'Contenu', ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Envoyer</button>
</form>