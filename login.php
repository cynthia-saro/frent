<?php
include("php/db.php");
include("layouts/head_login.php");
?>

<body>

	<main id="loginPage">

		<div class="card bg-light">

			<div class="registerLogo">
				<img src="img/frent.png">
			</div>

			<article class="card-body mx-auto" style="max-width: 400px;">
				<h4 class="card-title mt-3 text-center">Se connecter</h4>

				<!---Form---->
				<form method="post" action="php/login.php">

					<?php if (isset($_SESSION['errors']) && array_key_exists('wrongid', $_SESSION['errors'])) { ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['wrongid']; ?>
						</div>
					<?php } ?>
					<?php if (isset($_SESSION['errors']) && array_key_exists('noUser', $_SESSION['errors'])) { ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['noUser']; ?>
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

					<!------BUTTON------->
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block" action="php/login.php"> Se connecter </button>
					</div>

				</form>
				<a class="msg_register linktootherpage" href="register.php">Vous n'avez pas de compte? Inscrivez-vous !</a>
			</article>
		</div>
	</main>

	<?php include("layouts/footer.php"); ?>

	<!--Scripts-->
	<?php include("layouts/scripts.php"); ?>

</body>

</html>