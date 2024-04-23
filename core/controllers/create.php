<?php

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userAge = (int) $_POST['age'];

$connect = require_once "../connect.php";

$sql = "INSERT INTO user(id, name, email, age)
        VALUES (NULL, '$userName', '$userEmail', $userAge)";

$newUser = mysqli_query($connect, $sql);
$newUseId = mysqli_insert_id($connect);

header("Location: /core/views/user.php?id=$newUseId");
