<?php
require_once("db.php");
session_start();
$myId = $_SESSION['member']['id'];

$sql = "SELECT * FROM users WHERE id=:myId";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":myId", $myId);
$stmt->execute();
$path = $stmt->fetch();

unlink($path['picture']);

$sql = "DELETE FROM users
        WHERE id=:myId";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":myId", $myId);
$stmt->execute();

session_destroy();

header('Location: ../login.php');
