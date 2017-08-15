<?php

use Core\HTML\BootstrapForm;

$postTable = App::getInstance()->getTable('Article');

if (!empty($_POST)){
    $result = $postTable->update($_GET['id'], [
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ]);
    if($result){
        ?>
        <div class="alert alert-success">L'article à bien été ajouté !</div>
        <?php
    }
}?>

<a href="admin.php" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Retour au menu</a>

<?php
$post = $postTable->findById($_GET['id']);
$form = new BootstrapForm($post); ?>

<form style="padding-top: 2%;padding-bottom: 2%;" method="post">
<?= $form->input('title', 'Titre de l\'article'); ?>
<?= $form->input('content', 'Contenu', ['type' => 'textarea']); ?>
<button class="btn btn-primary">Envoyer</button>
</form>