<?php
require_once("db.php");
session_start();

if (isset($_POST)){

	$email = $_POST['email'];
	$password= $_POST["password"];

    //first_name 
	if (empty($email)) {
		$_SESSION['errors']['email '] = "Ce champ est obligatoire";
    }
    //last_name 
	if (empty($password)) {
		$_SESSION['errors']['password'] = "Ce champ est obligatoire";
	}
	
	$sql = "SELECT * FROM users WHERE email = :email";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue (":email", $email);
	$stmt->execute();
	$member = $stmt->fetch();

	if(empty($member)){
		$_SESSION['errors']['noUser'] = "Cet utilisateur n'existe pas";
	}

	if(!empty($member)){
		$passwordIsOk = password_verify($password, $member['password']);
		if ($passwordIsOk == false){
			$_SESSION['errors']['wrongid'] = "Mauvais identifiants";
		}
	}

	if (!empty($member) && empty($_SESSION['errors'])) {
		// $passwordIsOk = password_verify($password, $member['password']);

		// if ($passwordIsOk) {
			session_start();
			$_SESSION['member'] = $member;
			header("location: ../index.php");
			exit();
		// }
		// else {
		// 	header('Location: ../login.php');
		// }
	}
	else {
		header('Location: ../login.php');
		unset($_SESSION['errors']);
	}
}
?>
