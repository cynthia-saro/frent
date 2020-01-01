<?php
include("php/db.php");
include("layouts/head.php");
include("php/get_profilInformation.php");
?>

<body>

  <?php include_once('./components/debug.php'); ?>

  <?php include("layouts/header.php"); ?>

  <main id="homePage">
    <div class="introProfil">
      <img class="profilImage" src="<?php echo $profilinformation['picture'] ?>" />
      <div class="introProfilContent">
        <div class="firstNameAndLastName"><?php echo $profilinformation["first_name"] . '&nbsp ' . $profilinformation["last_name"] ?></div>
        <div class="profilEmail"><?php echo $profilinformation["email"] ?></div>
        <div class="phoneNumber">0<?php echo $profilinformation["phone_number"] ?></div>
      </div>
    </div>

    <div class="profilobjects">Ses objets</div>
    <div id="homeContentObjects">

      <?php
      foreach ($profilobjects as $object) {
      ?>
        <a href="product.php?id=<?php echo $object['id'] ?>">
          <div class="object">
            <img class="productPicture" src="<?php echo $object['picture'] ?>" />
            <div class="productName"><?php echo $object['name'] ?></div>
            <?php if ($object["status"] == "Réservé") { ?>
              <div class="objBooked"><?php echo $object["status"] ?></div>
            <?php } ?>
            <?php if ($object["status"] == "Disponible") { ?>
              <div class="objFree"><?php echo $object["status"] ?></div>
            <?php } ?>
          </div>
        </a>
      <?php } ?>

    </div>

  </main>

  <!--Scripts-->
  <?php include("layouts/scripts.php"); ?>

  <?php include("layouts/footer.php"); ?>


</body>

</html>