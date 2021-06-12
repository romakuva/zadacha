<?php include_once __DIR__ . "/header.php"; ?>
<div>
    <a class="btn btn-warning" href="/?model=user&action=read">К списку</a>
</div>

<h1>Products News</h1>

<div class="form-group">
    <form action="/?model=user&action=save" method="POST">
        <input type="hidden" value="<?=$one['id'] ?? '' ?>" name="id">
        <div class="form-group">
            <label>user</label>
            <input type="text" class="form-control" value="<?=$one['user'] ?? '' ?>" name="user">
        </div>
        <div class="form-group">
            <label>phone</label>
            <input type="text" class="form-control" value="<?=$one['phone'] ?? '' ?>" name="phone">
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="email" class="form-control" value="<?=$one['email'] ?? '' ?>" name="email">
        </div>
        <div>
            <input type="submit" class="btn btn-success">
        </div>
    </form>

<?php include_once __DIR__ . "/footer.php"; ?>