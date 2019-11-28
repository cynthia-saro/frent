<?php include("layouts/header.php");?>


<div class="fond_blur">
	<h1>Connectez vous</h1>
	<h2>Pour participer aux meilleurs évènements de Nantes</h2>

	<form method="post" action="php/login.php">

		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="email">Votre e-mail</label>
					<input class="form-control" type="email" name="email" id="email">
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="password">Votre mot de passe</label>
					<input class="form-control" type="password" name="password" id="password">
				</div>
			</div>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-light" action="php/login.php">Valider</button>
		</div>

</div>


<?php include("layouts/footer.php");?>
