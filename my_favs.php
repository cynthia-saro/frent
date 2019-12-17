<?php
  include("php/db.php");
  include("layouts/head.php");
?>

  <body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php");?>

    <main id="homePage">
      <div class="pageName">Mes favoris : </div>
      <div class="homeContentObjects">
        TO DO
      </div>
    </main>

    <a href="create_object.php"><div class="addObjectButton">Ajouter un produit</div></a>


    <?php include("layouts/footer.php");?>

    <!--Scripts-->
    <?php include("layouts/scripts.php");?>

  </body>

</html>