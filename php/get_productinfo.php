<?php
/*--faire une requete qui permet de recuperer les infos de le produit en question---- */
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

?>