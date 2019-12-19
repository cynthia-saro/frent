<?php
    $iduser = $_SESSION['member']['id'];

    //requete pour récuperer les informations du groupe de la personne connectée
    $sql="SELECT * FROM `objects` WHERE user_id = :iduser";
    $stmt = $conn->prepare($sql);
    $stmt-> bindValue(":iduser", $iduser);
    $stmt->execute();
    $myobjects = $stmt->fetchAll();

?>