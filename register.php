<?php
include("php/db.php");
?>

<?php include("layouts/head.php"); ?>

<body>

	<?php include_once('./components/debug.php'); ?>

	<!------MODIFS------->
	<main id="registerPage">
    
		<div class="card bg-light">
     
      <div class="registerLogo">
        <img src="img/frent.png">
      </div>

      <article class="card-body mx-auto">
      <!--<article class="card-body mx-auto" style="max-width: 400px;">-->
				<h4 class="card-title mt-3 text-center">S'inscrire</h4>
        
        <!---Form---->
				<form method="post" action="php/login.php"><!---Post n'affiche pas les infos--->

          <!----first name---->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-user"></i> </span>
						</div>
						<input name="user_firstname" class="form-control" placeholder="Prénom" type="text">
          </div>

          <!----last name---->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-user"></i> </span>
						</div>
						<input name="user_lastname" class="form-control" placeholder="Nom" type="text">
          </div>

          <!-----Phone number----->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
						</div>
						<input name="user_phonenumber" class="form-control" placeholder="Numéro de téléphone" type="tel">
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
          
          <!------Password verification------>
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input class="form-control" placeholder="Valider le mot de passe" type="password">
          </div>

          <!------Picture------>
					<div class="form-group input-group">
						<input name="picturePicker" type="file">
          </div>
          
          <!------BUTTON------->
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block"> S'inscrire </button>
          </div>
          
				</form>
			</article>
		</div> <!-- card.// -->
	</main>
	<!------MODIFS------->

	<?php include("layouts/footer.php"); ?>

	<!--Scripts-->
	<?php include("layouts/scripts.php"); ?>

</body>

</html>