<?php if($errors): ?>
    <div class="alert alert-danger">
        Idenfiants incorrects
    </div>
<?php endif;?>
<div class="body">
    <div class="container">
        <form method="post">
            <?= $form->input('username', 'Pseudo'); ?>
            <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
            <button class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>        