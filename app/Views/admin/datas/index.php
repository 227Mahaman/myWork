<h1>Listing de nos Datas</h1>
<p>
    <a href="?p=admin.datas.add" class="btn btn-success">Ajouter</a>
</p>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Lectures</td>
            <td>Date</td>
            <td>Fikr</td>
            <td>Chemin</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $data): ?>
            <tr>
            <td><?= $data->id; ?></td>
            <td><?= $data->lecture; ?></td>
            <td><?= $data->date; ?></td>
            <td><?= $data->titre; ?></td>
            <td><?= $data->chemin; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=admin.datas.edit&id=<?= $data->id; ?>">Editer</a>
                <form action="?p=admin.datas.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $data->id; ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?endforeach; ?>
    </tbody>
</table>