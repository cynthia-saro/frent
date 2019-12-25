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
  $booker = $_POST['booker'];
  $iduser = $_SESSION['member']['id'];

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

    // modify the objects information
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

    // save the booking in the database
    /// select the id of the booker
    /// verification of status
    if ($productStatus == "Réservé"){
      $sql="INSERT INTO reservations (obj_id,	user_renter,	user_booker)  
            VALUES (:id,	:iduser,	:booker)";
      $stmt = $conn->prepare($sql);
      $stmt->bindValue(":id", $id);
      $stmt->bindValue(":iduser", $iduser);
      $stmt->bindValue(":booker", $booker);
      $stmt->execute();
    }
    if ($productStatus == "Disponible"){
      $sql="DELETE FROM reservations WHERE obj_id = :id AND user_renter = :iduser";
      $stmt = $conn->prepare($sql);
      $stmt->bindValue(":id", $id);
      $stmt->bindValue(":iduser", $iduser);
      $stmt->execute();
    }

    header('Location: ../index.php');
    
	} else {
    header('Location: ../edit_object.php?id='.$id);
    unset($_SESSION['errors']);

	}
	
}
