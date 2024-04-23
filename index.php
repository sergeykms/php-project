<?php
$connect = require_once "core/connect.php";

$sql = "SELECT * FROM user";
$users = mysqli_query($connect, $sql);

$userList = [];
while ($row = mysqli_fetch_assoc($users)) {
    $userList[] = $row;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<main>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">User ID</th>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Age</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($userList as $user) { ?>
                <tr>
                    <th><?= $user["id"] ?></th>
                    <td>
                        <a href="core/views/user.php?id=<?= $user["id"] ?>"><?= $user["name"] ?></a>
                    </td>
                    <td><?= $user["email"] ?></td>
                    <td><?= $user["age"] ?></td>
                    <td>
                        <a href="core/views/editUser.php?id=<?=$user["id"] ?>">
                            <button type="button" class="btn btn-success">Edit</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <div class="container">
        <h2>Add new user</h2>
        <form action="core/controllers/create.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">User name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">User email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">User age</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
            <button type="submit" class="btn btn-primary">Add user</button>
        </form>
    </div>

</main>
</body>
</html>