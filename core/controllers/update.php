<?php

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userAge = (int) $_POST['age'];
$userId = (int) $_POST['id'];

$connect = require_once "../connect.php";

$sql = "UPDATE user SET name='$userName',email='$userEmail',age=$userAge WHERE id = $userId";

$updateUser = mysqli_query($connect, $sql);
$updateUser = mysqli_insert_id($connect);

header("Location: /core/views/user.php?id=$userId");
