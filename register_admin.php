<?php
include("php/db.php");
?>

<?php include("layouts/head_login.php"); ?>

<body>

	<?php include_once('./components/debug.php'); ?>

	<!------MODIFS------->
	<main id="registerPage">

		<div class="card bg-light">

			<a href="javascript:history.back()" class="registerReturn">retour</a>
			<div class="registerLogo">
				<img src="img/frent.png">
			</div>

			<article class="card-body mx-auto">
				<h4 class="card-title mt-3 text-center">S'inscrire en tant qu'admin</h4>

				<!---Form---->
				<form method="post" action="php/register_admin.php" enctype="multipart/form-data">
					<!---Post n'affiche pas les infos--->

					<!----first name---->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-user"></i> </span>
						</div>
						<input name="first_name" id="first_name" class="form-control" placeholder="Prénom" type="text">
					</div>
					<!---Errors to define in the folder "php"---->
					<?php if (isset($_SESSION['errors']) && array_key_exists('first_name', $_SESSION['errors'])) { ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['first_name']; ?>
						</div>
					<?php } ?>

					<!----last name---->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-user"></i> </span>
						</div>
						<input name="last_name" id="last_name" class="form-control" placeholder="Nom" type="text">
					</div>
					<?php if (isset($_SESSION['errors']) && array_key_exists('last_name', $_SESSION['errors'])) { ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['last-name']; ?>
						</div>
					<?php } ?>

					<!-----Phone number----->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
						</div>
						<input name="phone_number" id="phone_number" class="form-control" placeholder="Numéro de téléphone" type="tel">
					</div>
					<?php if (isset($_SESSION['errors']) && array_key_exists('phone_number', $_SESSION['errors'])) { ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['phone_number']; ?>
						</div>
					<?php } ?>

					<!-----Email---->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
						</div>
						<input name="email" id="email" class="form-control" placeholder="Email" type="email">
					</div>
					<?php if (isset($_SESSION['errors']) && array_key_exists('email', $_SESSION['errors'])) { ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['email']; ?>
						</div>
					<?php } ?>

					<!------Password------>
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input name="password" id="password" class="form-control" placeholder="Mot de passe" type="password">
					</div>
					<?php if (isset($_SESSION['errors']) && array_key_exists('password', $_SESSION['errors'])) { ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['password']; ?>
						</div>
					<?php } ?>

					<!------Password verification------>
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input name="password_verif" id="password_verif" class="form-control" placeholder="Valider le mot de passe" type="password">
					</div>
					<?php if (isset($_SESSION['errors']) && array_key_exists('password_verif', $_SESSION['errors'])) { ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['password_verif']; ?>
						</div>
					<?php } ?>

					<!------picturePicker------>
					<div class="form-group input-group">
						Photo de profil
						<input type="hidden" name="MAX_FILE_SIZE" value="3000000000" />
						<input type="file" name="picturePicker" id="picturePicker">
					</div>
					<?php if (isset($_SESSION['errors']) && array_key_exists('picturePicker', $_SESSION['errors'])) { ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['picturePicker']; ?>
						</div>
					<?php } ?>

					<!--------------------------------CREATE A GROUP----------------------------------->
					<div class="registerCreateGroup">Créez votre groupe</div>

					<!----Group id---->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa fa-users"></i> </span>
						</div>
						<input name="group" id="group" class="form-control" placeholder="Identifiant de groupe" type="text">
					</div>
					<?php if (isset($_SESSION['errors']) && array_key_exists('group', $_SESSION['errors'])) { ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['group']; ?>
						</div>
					<?php } ?>

					<!----Group name---->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-tag"></i> </span>
						</div>
						<input name="group_name" id="group_name" class="form-control" placeholder="Nom du groupe" type="text">
					</div>
					<?php if (isset($_SESSION['errors']) && array_key_exists('group_name', $_SESSION['errors'])) { ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['group_name']; ?>
						</div>
					<?php } ?>

					<!----Group description---->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-align-justify"></i> </span>
						</div>
						<input name="group_description" id="group_description" class="form-control" placeholder="Description du groupe" type="text">
					</div>
					<?php if (isset($_SESSION['errors']) && array_key_exists('group_description', $_SESSION['errors'])) { ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['group_description']; ?>
						</div>
					<?php } ?>

					<!------BUTTON------->
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block"> S'inscrire </button>
					</div>

				</form>
			</article>
		</div> <!-- card.// -->
	</main>
	<!------MODIFS------->

	<?php $_SESSION['errors'] = null; ?>
	<?php include("layouts/footer.php"); ?>

	<!--Scripts-->
	<?php include("layouts/scripts.php"); ?>

</body>

</html>