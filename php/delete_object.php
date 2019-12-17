<?php
require_once("db.php");
session_start();

$id = $_GET['id'];
$sql = "DELETE FROM objects
        WHERE id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $id);
$stmt->execute();

header('Location: ../index.php');
?>
