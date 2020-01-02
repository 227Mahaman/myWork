<?php $title="Insertion Annonce";
?>

<form method="post">
<?= $form->input('titre', 'Titre de l\'annonce'); ?>
    <?= $form->input('description', 'Description', ['type' => 'textarea']); ?>
    <?= $form->input('auteur', 'Auteur', ['type' => 'text']); ?>
    <?= $form->input('date', 'Date', ['type' => 'date']); ?>
    <?= $form->input('lieu', 'Lieu', ['type' => 'text']); ?>
    <?= $form->select('categorie', 'Catégorie', $categories); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>