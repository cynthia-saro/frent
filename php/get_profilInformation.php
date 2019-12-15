<?php
$iduser = $_GET['iduser'];

$sql="SELECT * 
      FROM users
      WHERE id = :iduser";
$stmt = $conn->prepare($sql);
$stmt-> bindValue(":iduser", $iduser);
$stmt->execute();
$profilinformation = $stmt->fetch();
?>