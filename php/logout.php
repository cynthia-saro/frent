<?php
	//on va utiliser la variable session...
session_start();
	//detruit just ela partie de la session qui conserne le member
unset($_SESSION['member']);
	//ou on detruit tout
session_destroy();

	//on redirige vers l'acceuil
header("location: ../login.php");
?>
