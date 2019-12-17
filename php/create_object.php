<?php
require_once("db.php");
session_start();
$error="";

//If the form is sent : 
if (isset($_POST)) {
    //We create variables
    $pictureProduct = $_POST['pictureProduct'];
	$productName = $_POST['productName'];
    $productCondition = $_POST['productCondition'];
    $productDescription = $_POST['productDescription'];
    $iduser = $_SESSION['member']['id'];

    //pictureProduct 
	if (empty($pictureProduct)) {
		$_SESSION['errors']['pictureProduct '] = "Ce champ est obligatoire";
    }
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
	if (empty($_SESSION['errors'])) {

		$sql="INSERT INTO objects (name, picture, obj_condition, description, status, user_id, date_created)
		VALUES (:productName, :pictureProduct, :productCondition, :productDescription, 'Disponible', :iduser, NOW())";

		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":productName", $productName);
		$stmt->bindValue(":pictureProduct", $pictureProduct);
        $stmt->bindValue(":productCondition", $productCondition);
        $stmt->bindValue(":productDescription", $productDescription);
        $stmt->bindValue(":iduser", $iduser);

		$stmt->execute();

		header('Location: ../index.php');
	} else {
		header('Location: ../create_object.php');
	}
	
}
