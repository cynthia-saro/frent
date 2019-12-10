<?php
//recupere les derniers objets dans la bdd, on les classe par date dans l'ordre decroissant

//MODIFIER AVEC UN WHERE QUI VERIFIE L'ID DE L'UTILISATEUR
$sql="SELECT *
      FROM groups_information";
//envoie la requête à MySQL, sans l'executer
$stmt = $conn->prepare($sql);
//demande à MySQL de l'executer
$stmt->execute();
//va chercher les résultats chez MySQL
$mygroup = $stmt->fetch();

//METTRE FETCH ALL QUAND LA REQUETTE SERA CORRECTE
//$mygroup = $stmt->fetchAll();
?>