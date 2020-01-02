<h1>Listing de nos fikrs</h1>
<p>
    <a href="?p=admin.fikrs.add" class="btn btn-success">Ajouter</a>
</p>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Titre</td>
            <td>Livre</td>
            <td>Auteurs</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $fikr): ?>
            <tr>
            <td><?= $fikr->id; ?></td>
            <td><?= $fikr->titre; ?></td>
            <td><?= $fikr->livre; ?></td>
            <td><?= $fikr->nom . ' ' . $fikr->prenom;?></td>
            <td><?= $fikr->date; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=admin.fikrs.edit&id=<?= $fikr->id; ?>">Editer</a>
                <form action="?p=admin.fikrs.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $fikr->id; ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?endforeach; ?>
    </tbody>
</table>