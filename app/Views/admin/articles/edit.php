<a href="index?p=admin.posts.index" class="btn btn-primary" style="margin: 1% 0 0 0"><span class="glyphicon glyphicon-chevron-left"></span> Retour au menu</a>

<form style="padding-top: 2%;padding-bottom: 2%;" method="post">
    <?= $form->input('title', 'Titre de l\'article'); ?>
    <?= $form->input('content', 'Contenu', ['type' => 'textarea']); ?>
<button class="btn btn-primary">Envoyer</button>
</form>