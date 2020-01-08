<?php
include("php/db.php");
include("layouts/head.php");
include("php/get_profilInformation.php");
include("php/get_myGroup.php");
$iduser = $_GET['iduser'];
?>

<body>

  <?php include_once('./components/debug.php'); ?>

  <?php include("layouts/header.php"); ?>

  <main id="homePage">
    <?php 
    $accesprofil = array();
    foreach ($mygroupmembers as $profil) {
      $accesprofil[] = $profil['id'];
    }
    if (in_array($iduser, $accesprofil)) { ?>
    <div class="introProfil">
      <img class="profilImage" src="<?php echo $profilinformation['picture'] ?>" />
      <div class="introProfilContent">
        <div class="firstNameAndLastName"><?php echo $profilinformation["first_name"] . '&nbsp ' . $profilinformation["last_name"] ?></div>
        <div class="profilEmail"><?php echo $profilinformation["email"] ?></div>
        <div class="phoneNumber">0<?php echo $profilinformation["phone_number"] ?></div>
      </div>
    </div>

    <div class="profilobjects">Ses objets</div>
    <div class="homeContentObjects">

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
    <?php } else {
      echo "Vous n'avez pas accès à cette page.";
    } ?>
  </main>

  <!--Scripts-->
  <?php include("layouts/scripts.php"); ?>

  <?php include("layouts/footer.php"); ?>


</body>

</html>