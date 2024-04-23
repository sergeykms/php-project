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
        print_r($user);

        ?>
        <h2 class="mt-3">Edit user - <?= $user['name'] ?></h2>
        <form action="../controllers/update.php" method="post">
            <input type="hidden" name="id" value="<?= $userid ?>">
            <div class="mb-3">
                <label for="name" class="form-label">User name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">User email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">User age</label>
                <input type="number" class="form-control" id="age" name="age" value="<?= $user['age'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

</main>
</body>
</html>
