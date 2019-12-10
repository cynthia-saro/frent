<?php
//On récupère l'id de notre compte actuel
$iduser = $_SESSION['member']['id'];

//Requete pour avoir tous les objects des utilisateurs du même groupe que moi
$sql="SELECT objects.id, objects.name, objects.picture, objects.status
      FROM objects, users
      where objects.user_id = users.id AND users.user_group = (SELECT user_group FROM users WHERE id = :iduser)
      ORDER BY objects.date_created DESC";

//envoie la requête à MySQL, sans l'executer
$stmt = $conn->prepare($sql);
$stmt-> bindValue(":iduser", $iduser);
//demande à MySQL de l'executer
$stmt->execute();
//va chercher les résultats chez MySQL
$objects = $stmt->fetchAll();
?>