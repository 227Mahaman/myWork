<h1>Enregistrement de Data des Fikrs</h1>
<form method="post" enctype="multipart/form-data">
    <?= $form->input('titre', 'Titre du Data'); ?>
    <?= $form->input('date', 'Date', ['type' => 'date']); ?>
    <?= $form->select('fikr', 'Fikr', $fikrs); ?>
    <input type="file" name="fichier"/>
    <?//= //$form->input('fichier', 'Fichier à upload', ['type' => 'file']); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>