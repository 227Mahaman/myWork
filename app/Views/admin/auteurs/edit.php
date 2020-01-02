<h1>Enregistrement de nos Oulémas (Auteur)</h1>
<form method="post" enctype="multipart/form-data">
    <?= $form->input('nom', 'Nom'); ?>
    <?= $form->input('prenom', 'Prenom'); ?>
    <?= $form->select('region', 'Région', $regions); ?>
    <?= $form->input('description', 'Bibliographie'); ?>
    <input type="file" name="fichier"/>
    <button class="btn btn-primary">Sauvegarder</button>
</form>