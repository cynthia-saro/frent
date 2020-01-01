<?php
$iduser = $_SESSION['member']['id'];

//requete pour récuperer les informations du groupe de la personne connectée
$sql="SELECT * 
      FROM groups_information
      WHERE identification_key = (
            SELECT users.user_group
            FROM users
            WHERE users.id = :iduser)";
$stmt = $conn->prepare($sql);
$stmt-> bindValue(":iduser", $iduser);
$stmt->execute();
$mygroup = $stmt->fetch();


//requete pour avoir tous les membres du groupe
$sql="SELECT * 
      FROM users
      WHERE user_group = (SELECT user_group from users Where id= :iduser)";
$stmt = $conn->prepare($sql);
$stmt-> bindValue(":iduser", $iduser);
$stmt->execute();
$mygroupmembers = $stmt->fetchAll();

//requete pour avoir le nom et prénom de l'admin
$adminId = $mygroup['adminId'];
$sql="SELECT id, first_name, last_name
      FROM users
      WHERE id = :adminId";
$stmt = $conn->prepare($sql);
$stmt-> bindValue(":adminId", $adminId);
$stmt->execute();
$admin = $stmt->fetch();
?>
