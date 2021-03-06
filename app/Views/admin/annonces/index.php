<h1>Administrer nos Annonces</h1>
<p>
    <a href="?p=admin.annonces.add" class="btn btn-success">Ajouter</a>
</p>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Titre</td>
            <td>Date</td>
            <td>Photo</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($annonces as $post): ?>
            <tr>
            <td><?= $post->id; ?></td>
            <td><?= $post->titre; ?></td>
            <td><?= $post->date; ?></td>
            <td><?= $post->photo; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=admin.annonces.edit&id=<?= $post->id; ?>">Editer</a>
                <form action="?p=admin.annonces.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $post->id; ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?endforeach; ?>
    </tbody>
</table>