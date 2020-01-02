<h1>Listing de nos Auteurs</h1>
<p>
    <a href="?p=admin.auteurs.add" class="btn btn-success">Ajouter</a>
</p>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Photo</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $auteur): ?>
            <tr>
            <td><?= $auteur->id; ?></td>
            <td><?= $auteur->nom; ?></td>
            <td><?= $auteur->prenom; ?></td>
            <td><?= $auteur->photo; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=admin.auteurs.edit&id=<?= $auteur->id; ?>">Editer</a>
                <form action="?p=admin.auteurs.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $auteur->id; ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?endforeach; ?>
    </tbody>
</table>