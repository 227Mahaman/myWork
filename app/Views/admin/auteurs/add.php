<h1>Upload nos fikrs</h1>
<form method="post">
<?= $form->input('titre', 'Titre du Fikr'); ?>
    <?= $form->input('auteur', 'Auteur', ['type' => 'text']); ?>
    <?= $form->input('livre', 'livre', ['type' => 'text']); ?>
    <?= $form->input('date_fikr', 'Date', ['type' => 'date']); ?>
    <?= $form->input('date_event', 'Date Event', ['type' => 'date']); ?>
    <?= $form->input('lieu', 'Lieu', ['type' => 'text']); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>