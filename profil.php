<?php
  include("php/db.php");
  include("layouts/head.php");
  include("php/get_profilInformation.php");
?>

  <body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php");?>

    <main id="homePage">
      <div class="introProfil">
          <img class="profilImage" src="<?php echo $profilinformation['picture']?>"/>
          <div class="introProfilContent">
              <div class="firstNameAndLastName"><?php echo $profilinformation["first_name"] . '&nbsp ' . $profilinformation["last_name"] ?></div>
              <div class="profilEmail"><?php echo $profilinformation["email"] ?></div>
              <div class="phoneNumber">0<?php echo $profilinformation["phone_number"] ?></div>
          </div>
      </div>
      <div class="homeContentObjects">
        <div>Ses objets :</div>
      </div>
      <div class="homeContentObjects">
          <div>Ses réservations : </div>
      </div>
      <div class="homeContentObjects">
          <div>Ses favoris : </div>
      </div>

    </main>

    <?php include("layouts/footer.php");?>

    <!--Scripts-->
    <?php include("layouts/scripts.php");?>

  </body>

</html>