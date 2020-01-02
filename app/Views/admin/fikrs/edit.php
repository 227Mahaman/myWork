<h1>Enregistrement de fikr</h1>
<form method="post">
    <?= $form->input('titre', 'Titre du Fikr'); ?>
    <?= $form->input('livre', 'livre', ['type' => 'text']); ?>
    <?= $form->select('auteur', 'Auteur', $auteurs); ?>
    <?= $form->input('date', 'Date', ['type' => 'date']); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>