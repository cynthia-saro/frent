<?php
  include("php/db.php");
?>

<?php include("layouts/head.php");?>

  <body>

    <?php include_once('./components/debug.php'); ?>

    <main>

        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <div class="welcome_message">Bienvenue sur</div>
                <div class="registerGroupLogo"><img src="img/frent.png"></div>
                <p class="registerGroupMessage">Pour pouvoir accéder aux annonces, vous devez rentrer le code d'idenfication de votre groupe :</p>
                <form method="post" action="php/login.php">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-users"></i> </span>
                        </div>
                        <input name="user_groupID" class="form-control" placeholder="Indentifiant du groupe" type="text">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Enregistrer </button>
                    </div>
                </form>
                <a href="#">Vous ne faites pas encore parti d'un groupe ? Créez-le !</a>
            </article>
        </div>
    </main>

    <?php include("layouts/footer.php");?>

    <!--Scripts-->
    <?php include("layouts/scripts.php");?>

  </body>

</html>