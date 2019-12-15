<?php
  include("php/db.php");
  include("layouts/head.php");
  include("php/get_myProfilInfo.php");
?>

  <body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php");?>

    <main id="homePage">
      <div class="introProfil">
          <img class="profilImage" src="<?php echo $myprofilinformation['picture']?>"/>
          <div class="introProfilContent">
              <div class="firstNameAndLastName"><?php echo $myprofilinformation["first_name"] . '&nbsp ' . $myprofilinformation["last_name"] ?></div>
              <div class="profilEmail"><?php echo $myprofilinformation["email"] ?></div>
              <div class="phoneNumber">0<?php echo $myprofilinformation["phone_number"] ?></div>
          </div>
          <div>
            <a href="#" class="profilGoEdit">Modifier</a>
            <a href="php/logout.php" class="profilGoEdit">Se déconnecter</a>
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