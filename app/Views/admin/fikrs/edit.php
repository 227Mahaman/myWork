<h1>Enregistrement de fikr</h1>
<form method="post">
    <?= $form->input('titre', 'Titre du Fikr'); ?>
    <?= $form->input('livre', 'Livre'); ?>
    <?= $form->select('auteur', 'Auteur', $auteurs); ?>
    <?= $form->input('date', 'Date', ['type' => 'date']); ?>
    <?= $form->select('langue_id', 'Langue', $langues); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>