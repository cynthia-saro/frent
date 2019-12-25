<?php
include("php/db.php");
include("layouts/head.php");
include("php/get_myBookings.php");
?>

<body>

  <?php include_once('./components/debug.php'); ?>

  <?php include("layouts/header.php"); ?>

  <main id="homePage">
    <div class="pageName">Mes réservations : </div>
    <div class="homeContentObjects">
      <?php if (!empty($myBookings)) {
        foreach ($myBookings as $mybooking) { /* on parcourt tous les events de la bd [obtenus grace a get_events.php] et pour chacun, on affiche son titre*/
      ?>
          <a href="product.php?id=<?php echo $mybooking['id'] ?>">
            <div class="object">
              <img class="productPicture" src="<?php echo $mybooking['picture'] ?>" />
              <div class="productName"><?php echo $mybooking['name'] ?></div>
              <?php if ($mybooking["status"] == "Réservé") { ?>
                <div class="objBooked"><?php echo $mybooking["status"] ?></div>
              <?php } ?>
              <?php if ($mybooking["status"] == "Disponible") { ?>
                <div class="objFree"><?php echo $mybooking["status"] ?></div>
              <?php } ?>
            </div>
          </a>
        <?php }
      } else { ?>
        <div>Vous n'avez réservé aucun objet</div>
      <?php } ?>
    </div>
  </main>

  <a href="create_object.php">
    <div class="addObjectButton">Ajouter un produit</div>
  </a>


  <?php include("layouts/footer.php"); ?>

  <!--Scripts-->
  <?php include("layouts/scripts.php"); ?>

</body>

</html>