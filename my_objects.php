<?php
  include("php/db.php");
  include("layouts/head.php");
  include("php/get_myObjects.php");
?>

  <body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php");?>

    <main id="homePage">
      <div class="pageName">Mes objets : </div>
      <div class="homeContentObjects">
        <?php
          foreach ($myobjects as $myobject) { /* on parcourt tous les events de la bd [obtenus grace a get_events.php] et pour chacun, on affiche son titre*/
            ?>
            <a href="product.php?id=<?php echo $myobject['id'] ?>">
              <div class="object">
                <img class="productPicture" src="<?php echo $myobject['picture']?>"/>
                <div class="productName"><?php echo $myobject['name'] ?></div>
                <div class="productStatus"><?php echo $myobject['status'] ?></div>
              </div>
            </a>
          <?php } ?>
      </div>
    </main>

    <a href="create_object.php"><div class="addObjectButton">Ajouter un produit</div></a>


    <?php include("layouts/footer.php");?>

    <!--Scripts-->
    <?php include("layouts/scripts.php");?>

  </body>

</html>