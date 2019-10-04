<h1>Lista de publicaciones</h1>

<a href="?controller=usuario&method=create"><button class="btn btn-outline-danger">Crear</button></a><br>
<table class="table">
    <thead>
        <th>id</th>
        <th>title</th>
        <th>description</th>
        <th>imagen</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $publication):  ?>
        <tr>
            <td><?= $publication->id?></td>
            <td><?= $publication->title ?></td>
            <td><?= $publication->description ?></td>
            <td><a href ="" download="<?= $publication->imagen ?>"><img width="100" height="100"src="<?= $publication->imagen ?>" alt=""></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

