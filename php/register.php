<?php
require_once("db.php");
session_start();
$error="";

//If the form is sent : 
if (isset($_POST)) {
	//We create variables
	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $password_verif = $_POST['password_verif'];
    $group = $_POST['group'];
    /**IMAGE**/
    $uploaddir = '../img/profils/';
    $uploadfile = $uploaddir . $_FILES['picturePicker']['name'];

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
    
    //password & password_verif 
  	if (empty($password)) {
		$_SESSION['errors']['password'] = "Ce champ est obligatoire";
	}
	if (empty($password_verif)) {
		$_SESSION['errors']['password_verif'] = "Ce champ est obligatoire";
    }
    if ($password != $password_verif) {
		$_SESSION['errors']['passwords'] = "Les mots de passes ne sont pas identiques";
    }

    //group verif
	if (empty($group)) {
		$_SESSION['errors']['group'] = "Ce champ est obligatoire";
    }

	// If there are no errors :
	if (empty($_SESSION['errors']) && move_uploaded_file($_FILES['picturePicker']['tmp_name'], $uploadfile)) {

		$sql="INSERT INTO users (first_name, last_name, email, phone_number, password, picture, user_group, date_created)
		VALUES (:first_name, :last_name, :email, :phone_number, :password, :uploadfile, :group, NOW())";

		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":first_name", $first_name);
		$stmt->bindValue(":last_name", $last_name);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":phone_number", $phone_number);
		//password crypt
		$password = password_hash($password, PASSWORD_DEFAULT,['cost' => 15]);
        $stmt->bindValue(":password", $password);
        $stmt->bindValue(":uploadfile", $uploadfile);
        $stmt->bindValue(":group", $group);

		$stmt->execute();

		$_SESSION['email'] = $_POST['email'];
		header('Location: ../login.php');
	} else {
		header('Location: ../register.php');
	}
	
}
