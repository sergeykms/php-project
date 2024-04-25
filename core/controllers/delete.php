<?php

//$userName = $_POST['name'];
//$userEmail = $_POST['email'];
//$userAge = (int) $_POST['age'];
$userId = (int) $_GET['id'];

$connect = require_once "../connect.php";

print_r($_GET);
$sql = "DELETE FROM user WHERE id = $userId";
//
$updateUser = mysqli_query($connect, $sql);
//$updateUser = mysqli_insert_id($connect);
//
header("Location: /");
