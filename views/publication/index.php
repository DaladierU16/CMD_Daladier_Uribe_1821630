<h1>Lista de publicaciones</h1>

<a href="?controller=publication&method=create"><button class="btn btn-outline-danger">Crear</button></a><br>
<table class="table">
    <thead>
        <th>id</th>
        <th>title</th>
        <th>description</th>
        <th>imagen</th>
        <th>opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $publication):  ?>
        <tr>
            <td><?= $publication->id?></td>
            <td><?= $publication->title ?></td>
            <td><?= $publication->description ?></td>
            <td><a href ="" download="<?= $publication->imagen ?>"><img width="100" height="100"src="<?= $publication->imagen ?>" alt=""></a></td>
            <td width="200" class="table__options">
                <a href="?controller=publication&method=edit&id=<?= $publication->id ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=publication&method=delete&id=<?= $publication->id ?>">
                    <button class="btn btn-outline-red">Delete</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

