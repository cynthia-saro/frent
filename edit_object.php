<?php
include("php/db.php");
include("layouts/head.php");
include("php/get_productinfo.php");
?>

<body>

  <?php include_once('./components/debug.php'); ?>

  <?php include("layouts/header.php");
  ?>

  <main>
    <article class="card-body mx-auto">

      <?php if ($_SESSION['member']['id'] ==  $creator['id']) { ?>
        <div class="">Modifier mon object</div>

        <!---Form---->
        <form method="post" action="php/edit_object.php">
          <!---Post n'affiche pas les infos--->

          <!----productStatus---->
          <div class="form-group input-group">
            <select class="form-control" name="productStatus" id="productStatus" >
              <option value="<?php echo $productinfo['status'] ?>" disabled selected hidden ><?php echo $productinfo['status'] ?></option>
              <option>Réservé</option>
              <option>Disponible</option>
            </select>
            <!-- <input name="productStatus" id="productStatus" class="form-control" placeholder="État de l'object" type="text"> -->
            <?php if (isset($_SESSION['errors']) && array_key_exists('productStatus', $_SESSION['errors'])) { ?>
              <div class="alert alert-danger mt-2">
                <?php echo $_SESSION['errors']['productStatus']; ?>
              </div>
            <?php } ?>
          </div>

          <!------pictureProduct------>
          <div class="form-group input-group">
            <input name="pictureProduct" id="pictureProduct" class="form-control" placeholder="photo" type="text" value="<?php echo $productinfo['picture'] ?>">
          </div>

          <!----productName---->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-quote-left"></i> </span>
            </div>
            <input name="productName" id="productName" class="form-control" placeholder="Nom du produit" type="text" value="<?php echo $productinfo['name'] ?>">
            <!---Errors---->
            <?php if (isset($_SESSION['errors']) && array_key_exists('productName', $_SESSION['errors'])) { ?>
              <div class="alert alert-danger mt-2">
                <?php echo $_SESSION['errors']['productName']; ?>
              </div>
            <?php } ?>
          </div>

          <!----productCondition---->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-check-circle"></i> </span>
            </div>
            <select class="form-control" name="productCondition" id="productCondition">
              <option value="<?php echo $productinfo['obj_condition'] ?>" disabled selected hidden><?php echo $productinfo['obj_condition'] ?></option>
              <option>Neuf</option>
              <option>Très bon état</option>
              <option>Correct</option>
            </select>
            <!-- <input name="productCondition" id="productCondition" class="form-control" placeholder="État de l'object" type="text"> -->
            <?php if (isset($_SESSION['errors']) && array_key_exists('productCondition', $_SESSION['errors'])) { ?>
              <div class="alert alert-danger mt-2">
                <?php echo $_SESSION['errors']['productCondition']; ?>
              </div>
            <?php } ?>
          </div>

          <!-----productDescription----->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-align-justify "></i> </span>
            </div>
            <input name="productDescription" id="productDescription" class="form-control" placeholder="Description de l'object" type="textarea" value="<?php echo $productinfo['description'] ?>">
            <?php if (isset($_SESSION['errors']) && array_key_exists('productDescription', $_SESSION['errors'])) { ?>
              <div class="alert alert-danger mt-2">
                <?php echo $_SESSION['errors']['productDescription']; ?>
              </div>
            <?php } ?>
          </div>

          <!------BUTTONS------->
          <div>
            <a href="javascript:history.back()">Annuler</a>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Modifier</button>
            </div>
            <button type="button" class="btn btn-danger"><a href="php/delete_object.php?id=<?php echo $id?>">Supprimer l'objet</a></button>
          </div>

        </form>

      <?php } else {
        echo ("Vous n'avez pas acces à cette page!");
      } ?>

    </article>
  </main>

  <?php include("layouts/footer.php"); ?>

  <!--Scripts-->
  <?php include("layouts/scripts.php"); ?>

</body>

</html>