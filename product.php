<?php
include("php/db.php");
include("layouts/head.php");
include("php/get_productinfo.php");
$id = $_GET['id'];
?>

<body>

  <?php include_once('./components/debug.php'); ?>

  <?php include("layouts/header.php"); ?>

  <main id="productPage">
    <?php
    $array = array();
    foreach ($verifobject as $value) {
      $array[] = $value['id'];
    }
    if (isset($productinfo['id']) && in_array($id, $array)) { ?>
      <img class="productPicture" src="<?php echo $productinfo['picture'] ?>" />
      <div><?php echo $productinfo["name"] ?></div>
      <?php if ($productinfo["status"] == "Réservé") { ?>
        <div class="objBooked"><?php echo $productinfo["status"] ?></div>
        <?php if ($_SESSION['member']['id'] ==  $creator['id']) { ?>
          <div class="bookedBy">Par : <a href="profil.php?iduser=<?php echo $bookerinfo['id'] ?>"><?php echo $bookerinfo["first_name"] . "&nbsp" . $bookerinfo["last_name"]?></a></div>
        <?php }?>
      <?php } ?>
      <?php if ($productinfo["status"] == "Disponible") { ?>
        <div class="objFree"><?php echo $productinfo["status"] ?></div>
      <?php } ?>
      <div>État : <?php echo $productinfo["obj_condition"] ?></div>
      <div><?php echo $productinfo["description"] ?></div>
      <div>Proposé par : <a href="profil.php?iduser=<?php echo $creator['id'] ?>"> <?php echo $creator["first_name"] . "&nbsp" . $creator["last_name"] ?></a></div>
      <div> Contacter : </div>
      <div>
        <a href="mailto:<?php echo $creator['email'] ?>"><i class="fa fa-envelope"></i></a>
        <a href="tel:0<?php echo $creator['phone_number'] ?>"><i class="fa fa-phone"></i></a>
      </div>
      <!---if it is my product : i can delete it--->
      <?php if ($_SESSION['member']['id'] ==  $creator['id']) { ?>
        <button type="button" class="btn btn-light"><a href="edit_object.php?id=<?php echo $productinfo['id'] ?>">MODIFIER</a></button>
      <?php } ?>
    <?php } else {
      echo "Vous n'avez pas accès à cette page.";
    } ?>
  </main>

  <?php include("layouts/footer.php"); ?>

  <!--Scripts-->
  <?php include("layouts/scripts.php"); ?>

</body>

</html>