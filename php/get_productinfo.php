<?php
/*--faire une requete qui permet de recuperer les infos du produit en question---- */
$id = $_GET['id'];
$sql = "SELECT *
        FROM objects
        WHERE id=:id";

$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $id);
$stmt->execute();
$productinfo = $stmt->fetch();

/*----faire une requete qui recupere les infos de la personne qui a possède le produit-----*/
$idowner = $productinfo['user_id'];
$sql= "SELECT id, first_name, last_name, email, phone_number FROM users WHERE id=:idowner";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":idowner", $idowner);
$stmt->execute();
$creator=$stmt->fetch();

//requete pour vérifier que le produit fait parti des produits des personnes du même groupe
$iduser = $_SESSION['member']['id'];
$sql="SELECT objects.id
      FROM objects, users
      where objects.user_id = users.id AND users.user_group = (SELECT user_group FROM users WHERE id = :iduser)";
$stmt = $conn->prepare($sql);
$stmt-> bindValue(":iduser", $iduser);
$stmt->execute();
$verifobject = $stmt->fetchAll();

?>