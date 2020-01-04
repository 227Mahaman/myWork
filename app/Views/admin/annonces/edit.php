<h1>Editons l'Annonce</h1>
<form method="post" enctype="multipart/form-data">
    <?= $form->input('titre', 'Titre de l\'annonce'); ?>
    <?= $form->input('description', 'Description', ['type' => 'textarea']); ?>
    <?= $form->input('auteur', 'Auteur', ['type' => 'text']); ?>
    <?= $form->input('date', 'Date', ['type' => 'date']); ?>
    <?= $form->input('lieu', 'Lieu', ['type' => 'text']); ?>
    <?= $form->select('category_id', 'Catégorie', $categories); ?>
    <input type="file" name="fichier"/>
    <button class="btn btn-primary">Sauvegarder</button>
</form>