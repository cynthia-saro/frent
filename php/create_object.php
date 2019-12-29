<?php
require("db.php");
session_start();
$error = "";

//If the form is sent : 
if (isset($_POST)) {

    //We create variables
    $productName = $_POST['productName'];
    $productCondition = $_POST['productCondition'];
    $productDescription = $_POST['productDescription'];
    $iduser = $_SESSION['member']['id'];

    /**IMAGE**/
    $uploaddir = '../img/products/';
    $uploadfile = $uploaddir . $_FILES['pictureProduct']['name'];

    //productName
    if (empty($productName)) {
        $_SESSION['errors']['productName'] = "Ce champ est obligatoire";
    }
    //productCondition
    if (empty($productCondition)) {
        $_SESSION['errors']['productCondition'] = "Ce champ est obligatoire";
    }
    //productDescription
    if (empty($productDescription)) {
        $_SESSION['errors']['productDescription'] = "Ce champ est obligatoire";
    }

    // If there are no errors :
    if (empty($_SESSION['errors']) && move_uploaded_file($_FILES['pictureProduct']['tmp_name'], $uploadfile)) {

        $sql = "INSERT INTO objects (name, picture, obj_condition, description, status, user_id, date_created)
		VALUES (:productName, :uploadfile, :productCondition, :productDescription, 'Disponible', :iduser, NOW())";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":productName", $productName);
        $stmt->bindValue(":uploadfile", $uploadfile);
        $stmt->bindValue(":productCondition", $productCondition);
        $stmt->bindValue(":productDescription", $productDescription);
        $stmt->bindValue(":iduser", $iduser);

        $stmt->execute();

        header('Location: ../index.php');
    } else {
        header('Location: ../create_object.php');
        unset($_SESSION['errors']);
    }
}
