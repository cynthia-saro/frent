<?php
include("db.php");
session_start();
$id = $_GET['id'];

if (isset($_POST)) {
    //We create variables
    $productStatus = $_POST['productStatus'];
    $pictureProduct = $_POST['pictureProduct'];
  	$productName = $_POST['productName'];
    $productCondition = $_POST['productCondition'];
    $productDescription = $_POST['productDescription'];

    //productStatus
    if (empty($productStatus)) {
		$_SESSION['errors']['productStatus '] = "Ce champ est obligatoire";
    }
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

		$sql="UPDATE objects
        SET name = :productName, picture = :pictureProduct, obj_condition = :productCondition, description = :productDescription, status = :productStatus
		WHERE id = :id";

		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":productName", $productName);
		$stmt->bindValue(":pictureProduct", $pictureProduct);
        $stmt->bindValue(":productCondition", $productCondition);
        $stmt->bindValue(":productDescription", $productDescription);
        $stmt->bindValue(":productStatus", $productStatus);
        $stmt->bindValue(":id", $id);

    $stmt->execute();

		header('Location: ../index.php');
	} else {
    header('Location: ../edit_object.php?id='.$id);
    unset($_SESSION['errors']);

	}
	
}
