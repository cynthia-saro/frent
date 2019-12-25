<?php
$iduser = $_GET['iduser'];

/**info profil**/
$sql="SELECT * 
      FROM users
      WHERE id = :iduser";
$stmt = $conn->prepare($sql);
$stmt-> bindValue(":iduser", $iduser);
$stmt->execute();
$profilinformation = $stmt->fetch();

/**user's objects**/
$sql="SELECT * 
      FROM objects
      WHERE user_id = :iduser";
$stmt = $conn->prepare($sql);
$stmt-> bindValue(":iduser", $iduser);
$stmt->execute();
$profilobjects = $stmt->fetchAll();

/**user's booking**/
$sql="SELECT objects.id, objects.name, objects.picture, objects.status 
      FROM objects, reservations
      WHERE reservations.obj_id = objects.id AND user_booker = :iduser";

$stmt = $conn->prepare($sql);
$stmt-> bindValue(":iduser", $iduser);
$stmt->execute();
$profilbookings = $stmt->fetchAll();
?>