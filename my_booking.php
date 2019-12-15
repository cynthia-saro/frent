<?php 
  include("php/db.php");
  include("layouts/head.php");
  //MODIFIER AVEC FONCTION QUI RECUPERE MES RESERVATIONS
  include("php/get_objects.php"); ?>

  <body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php");?>

    <main id="homePage">
      <div class="pageName">Mes réservations : </div>

    </main>

    <a href="#"><div class="addObjectButton">Ajouter un produit</div></a>


    <?php include("layouts/footer.php");?>

    <!--Scripts-->
    <?php include("layouts/scripts.php");?>

  </body>

</html>