<?php
$myId = $_SESSION['member']['id'];

/**my information**/ 
$sql="SELECT * 
      FROM users
      WHERE id = :myid";
$stmt = $conn->prepare($sql);
$stmt-> bindValue(":myid", $myId);
$stmt->execute();
$myprofilinformation = $stmt->fetch();

/**my objects**/
$sql="SELECT * 
      FROM objects
      WHERE user_id = :myId";
$stmt = $conn->prepare($sql);
$stmt-> bindValue(":myId", $myId);
$stmt->execute();
$profilobjects = $stmt->fetchAll();

/**my bookings**/
$sql="SELECT objects.id, objects.name, objects.picture, objects.status 
      FROM objects, reservations
      WHERE reservations.obj_id = objects.id AND user_booker = :myId";

$stmt = $conn->prepare($sql);
$stmt-> bindValue(":myId", $myId);
$stmt->execute();
$profilbookings = $stmt->fetchAll();
?>