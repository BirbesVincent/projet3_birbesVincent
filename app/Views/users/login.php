<div><div class="content" style="padding-top: 1%">
    <?php if ($errors): ?>
        <p class="alert alert-danger">
            Identifiants incorrects
        </p>
    <?php endif; ?>

    <form method="post" style="padding-top: 1%">
        <?= $form->input('username', 'Pseudo'); ?>
        <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
        <button class="btn btn-primary">Envoyer</button>
    </form>
</div>