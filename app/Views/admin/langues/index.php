<h1>Administrer les langues</h1>

<p>
    <a href="?p=admin.langues.add" class="btn btn-success">Ajouter</a>
</p>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Code</td>
            <td>Titre</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $langue): ?>
            <tr>
            <td><?= $langue->id; ?></td>
            <td><?= $langue->code; ?></td>
            <td><?= $langue->titre; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=admin.langues.edit&id=<?= $langue->id; ?>">Editer</a>
                <form action="?p=admin.langues.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $langue->id; ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?endforeach; ?>
    </tbody>
</table>