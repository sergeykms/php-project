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
            </tr>
            </thead>
            <tbody>
            <?php foreach ($userList as $user) { ?>
                <tr>
                    <th><?= $user["id"] ?></th>
                    <td>
                        <a href="user.php?id=<?= $user["id"] ?>"><?= $user["name"] ?></a>
                    </td>
                    <td><?= $user["email"] ?></td>
                    <td><?= $user["age"] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</main>
</body>
</html>