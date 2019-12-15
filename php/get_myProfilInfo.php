<?php
$myId = $_SESSION['member']['id'];

$sql="SELECT * 
      FROM users
      WHERE id = :myid";
$stmt = $conn->prepare($sql);
$stmt-> bindValue(":myid", $myId);
$stmt->execute();
$myprofilinformation = $stmt->fetch();

?>