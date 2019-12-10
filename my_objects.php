<?php
  include("php/db.php");
  //MODIFIER AVEC FONCTION QUI RECUPERE MES OBJETS
  include("php/get_objects.php"); 
?>

<?php include("layouts/head.php");?>

  <body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php");?>

    <main id="homePage">
      <div class="pageName">Mes objets : </div>
      <div class="homeContentObjects">
        <?php
        /************************************A modifier avec mes objects************************************/
          foreach ($objects as $object) { 
            ?>
            <a href="info.php?id=<?php echo $object['id'] ?>"><!--href à changer et mettre l'iddugroupe-->
              <div class="object">
                <img class="productPicture" src="<?php echo $object['picture']?>"/>
                <div class="productName"><?php echo $object['name'] ?></div>
                <div class="productStatus"><?php echo $object['status'] ?></div>
              </div>
            </a>
          <?php } ?>
          <!--******************************A modifier avec mes objects************************************--->
      </div>
    </main>

    <a href="#"><div class="addObjectButton">Ajouter un produit</div></a>


    <?php include("layouts/footer.php");?>

    <!--Scripts-->
    <?php include("layouts/scripts.php");?>

  </body>

</html>