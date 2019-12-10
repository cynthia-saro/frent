<?php

require("db.php");
$error ="";

if (!empty($_POST)){

	$email = $_POST['email'];
	$password= $_POST["password"];

	$sql = "SELECT * FROM users WHERE email = :email";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue (":email", $email);
	$stmt->execute();
	$member = $stmt->fetch();

	if (!empty($member)) {
		$passwordIsOk = password_verify($password, $member['password']);

		if ($passwordIsOk) {
			session_start();
			$_SESSION['member'] = $member;
			header("location: ../index.php");
		}
		else {
			$error="Mauvais identifiant";
		}
	}

	else {
		$error="Mauvais identifiant";
	}

}

?>
