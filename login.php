<?php
include("php/db.php");
?>

<?php include("layouts/head.php"); ?>

<body>

	<?php include_once('./components/debug.php'); ?>

	<main id="loginPage">

		<div class="card bg-light">

			<div class="registerLogo">
				<img src="img/frent.png">
			</div>

			<article class="card-body mx-auto" style="max-width: 400px;">
				<h4 class="card-title mt-3 text-center">Se connecter</h4>

				<!---Form---->
				<form method="post" action="php/login.php">

					<!-----Group---->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-users"></i> </span>
						</div>
						<input name="user_groupID" class="form-control" placeholder="Indentifiant du groupe" type="text">
					</div>
					
					<!-----Email---->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
						</div>
						<input name="user_email" class="form-control" placeholder="Email" type="email">
					</div>

					<!------Password------>
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input class="form-control" placeholder="Mot de passe" type="password">
					</div>

					<!------BUTTON------->
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block"> Se connecter </button>
					</div>

				</form>
			</article>
		</div>
	</main>

	<?php include("layouts/footer.php"); ?>

	<!--Scripts-->
	<?php include("layouts/scripts.php"); ?>

</body>

</html>