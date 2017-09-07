<a href="admin.posts.index" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Retour au menu</a>

<form style="padding-top: 2%;padding-bottom: 2%;" method="post">
    <?= $form->input('title', 'Titre de l\'article'); ?>
    <?= $form->input('content', 'Contenu', ['type' => 'textarea']); ?>
<button class="btn btn-primary">Envoyer</button>
</form>