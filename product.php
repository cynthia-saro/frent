<?php
  include("php/db.php");
  include("layouts/head.php");
  include("php/get_productinfo.php");
?>

  <body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php");?>

    <main id="productPage">
      <?php if(isset($productinfo['id'])){?>
        <img class="productPicture" src="<?php echo $productinfo['picture']?>"/>
        <div><?php echo $productinfo["name"] ?></div> 
        <div><?php echo $productinfo["status"]?></div>
        <div>État : <?php echo $productinfo["obj_condition"]?></div>    
        <div><?php echo $productinfo["description"]?></div> 
        <div>Proposé par : <a href="profil.php?iduser=<?php echo $creator['id'] ?>"> <?php echo $creator["first_name"] . "&nbsp" . $creator["last_name"]?></a></div> 
        <div> Contacter : </div>
        <div>
          <a href="mailto:<?php echo $creator['email'] ?>"><i class="fa fa-envelope"></i></a>
          <a href="tel:0<?php echo $creator['phone_number'] ?>"><i class="fa fa-phone"></i></a>
        </div>    
        <div>Ajouter en favoris</div>
        <!---if it is my product : i can delete it--->
        <?php if($_SESSION['member']['id'] ==  $creator['id']){?>
          <button type="button" class="btn btn-light"><a href="edit_object.php?id=<?php echo $productinfo['id']?>">MODIFIER</a></button>
        <?php } ?>
      <?php } ?>
    </main>

    <?php include("layouts/footer.php");?>

    <!--Scripts-->
    <?php include("layouts/scripts.php");?>

  </body>

</html>