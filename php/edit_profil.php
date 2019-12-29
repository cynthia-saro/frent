<?php
include("db.php");
session_start();
$myId = $_SESSION['member']['id'];

if (isset($_POST)) {
    //We create variables
	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    
    //first_name 
	if (empty($first_name)) {
		$_SESSION['errors']['first_name '] = "Ce champ est obligatoire";
    }
    //last_name 
	if (empty($last_name)) {
		$_SESSION['errors']['last_name'] = "Ce champ est obligatoire";
    }
    //phone_number verif
    if (empty($phone_number)) {
		$_SESSION['errors']['phone_number'] = "Ce champ est obligatoire";
    }
    
    //email
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$_SESSION['errors']['email'] = "Votre email n'est pas valide";
    }
    if (empty($email)) {
		$_SESSION['errors']['email'] = "Ce champ est obligatoire";
    }
    
    // If there are no errors :
	if (empty($_SESSION['errors'])) {

        $sql="UPDATE users 
              SET first_name = :first_name, last_name = :last_name, email = :email, phone_number = :phone_number
              WHERE id = :myId";

		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":first_name", $first_name);
		$stmt->bindValue(":last_name", $last_name);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":phone_number", $phone_number);
        $stmt->bindValue(":myId", $myId);

		$stmt->execute();

		header('Location: ../my_profil.php');
	} else {
        header('Location: ../edit_profil.php');
        unset($_SESSION['errors']);
	}
}