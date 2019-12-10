<?php
  include("php/db.php");
  //MODIFIER AVEC FONCTION QUI RECUPERE MES OBJETS
  include("php/get_myGroup.php"); 
?>

<?php include("layouts/head.php");?>

  <body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php");?>

    <main id="homePage">
      <div class="pageName"><?php echo $mygroup["name"]?></div> 
      <div class="infoGroup">
        <div class="groupDate"><?php echo ("Crée le : ") . $mygroup["date_created"]?></div>
        <div class="groupDescription"><?php echo $mygroup["group_description"]?></div>

        <div class="admin"><?php echo ("Admin : ")?></div>
        <div class="groupModify">Modifier</div>
      </div>
      <div class="allMembers">

      </div>
    </main>

    <a href="#"><div class="addObjectButton">Ajouter un produit</div></a>


    <?php include("layouts/footer.php");?>

    <!--Scripts-->
    <?php include("layouts/scripts.php");?>

  </body>

</html>