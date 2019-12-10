<?php include("layouts/head.php");
 include("php/db.php");
 include("php/get_objects.php");
?>

  <body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php");?>

    <main id="homePage">
      <h1 class="groupName">Nom du groupe</h1>
      <div class="allProdutsText">Tous les produits : </div>
      <div class="homeContentObjects">
        <?php
          foreach ($objects as $object) { /* on parcourt tous les events de la bd [obtenus grace a get_events.php] et pour chacun, on affiche son titre*/
            ?>
            <a href="info.php?id=<?php echo $object['id'] ?>"><!--href à changer et mettre l'iddugroupe-->
              <div class="object">
                <img class="productPicture" src="<?php echo $object['picture']?>"/>
                <div class="productName"><?php echo $object['name'] ?></div>
                <div class="productStatus"><?php echo $object['status'] ?></div>
              </div>
            </a>
          <?php } ?>
      </div>
    </main>

    <a href="#"><div class="addObjectButton">Ajouter un produit</div></a>


    <?php include("layouts/footer.php");?>

    <!--Scripts-->
    <?php include("layouts/scripts.php");?>

  </body>

</html>