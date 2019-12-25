<?php
//On récupère l'id de notre compte actuel
$iduser = $_SESSION['member']['id'];

//Requete pour avoir les informations des objets qu'on a réservé
$sql="SELECT objects.id, objects.name, objects.picture, objects.status 
      FROM objects, reservations
      WHERE reservations.obj_id = objects.id AND user_booker = :iduser";

//envoie la requête à MySQL, sans l'executer
$stmt = $conn->prepare($sql);
$stmt-> bindValue(":iduser", $iduser);
//demande à MySQL de l'executer
$stmt->execute();
//va chercher les résultats chez MySQL
$myBookings = $stmt->fetchAll();
?>