<!doctype html>
<html lang="ru">
<head>
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="h-100 p-5 bg-light border rounded-3">
    <?php
    $userid = $_GET['id'];
    $connect = require_once "../connect.php";
    $sql = "SELECT * FROM user WHERE id = $userid";
    $users = mysqli_query($connect, $sql);
    if (mysqli_num_rows($users) === 0) {
        ?>
        <div class="alert alert-danger" role="alert">
            User not found!
        </div>
        <?php
        die();
    }
    $user = mysqli_fetch_assoc($users);

    ?>
    <h2><?= $user['name'] ?></h2>
    <p><?= $user['email'] ?></p>
    <p><?= $user['age'] ?></p>
    <a href="/" class="mt-3">
        <button type="button" class="btn btn-primary">На главную</button>
    </a>
</div>
</body>
</html>
