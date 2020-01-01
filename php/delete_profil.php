<?php
require_once("db.php");
session_start();
$myId = $_SESSION['member']['id'];

$sql = "DELETE FROM users
        WHERE id=:myId";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $myId);
$stmt->execute();

session_destroy();

header('Location: ../login.php');
