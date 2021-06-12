<?php include_once __DIR__ . "/header.php"; ?>
<div>
    <a class="btn btn-warning" href="/?model=user&action=create">Создать</a>
</div>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>user</th>
            <th>phone</th>
            <th>email</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($all as $products) : ?>
                <tr>
                    <td><?=$products['id']?></td>
                    <td><?=$products['user']?></td>
                    <td><?=$products['phone']?></td>
                    <td><?=$products['email']?></td>
                    <td style="width: 200px;">
                        <a href="/?model=user&action=delete&id=<?=$products['id']?>" class="btn btn-danger">Delete</a>
                        <a href="/?model=user&action=update&id=<?=$products['id']?>" class="btn btn-warning">Update</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include_once __DIR__ . "/footer.php"; ?>