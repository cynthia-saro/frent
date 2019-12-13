<?php
  include("php/db.php");
?>

<?php include("layouts/head.php");?>

  <body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php");?>

    <main id="homePage">
      <div class="introProfil">
          <img class="profilImage" src="https://images.pexels.com/photos/556663/pexels-photo-556663.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>
          <div class="introProfilContent">
              <div class="firstNameAndLastName">Nom Prénom</div>
              <div class="profilEmail">Email</div>
              <div class="phoneNumber">Numéro de téléphone</div>
              <a href="#" class="profilGoEdit">Modifier</a>
          </div>
      </div>
      <div class="homeContentObjects">
        <div>Mes objets :</div>
      </div>
      <div class="homeContentObjects">
          <div>Mes réservations : </div>
      </div>
      <div class="homeContentObjects">
          <div>Mes favoris : </div>
      </div>

    </main>

    <?php include("layouts/footer.php");?>

    <!--Scripts-->
    <?php include("layouts/scripts.php");?>

  </body>

</html>