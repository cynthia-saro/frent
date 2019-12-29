<?php
include("php/db.php");
include("layouts/head.php");
include("php/get_productinfo.php");
include("php/get_myGroup.php");
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
        <form method="post" action="php/edit_object.php?id=<?php echo $id?>">
          <!---Post n'affiche pas les infos--->

          <!----productStatus---->
          <div class="form-group input-group">
            <select class="form-control" name="productStatus" id="productStatus" >
              <option value="Réservé" <?php if($productinfo['status']=="Réservé"){echo "selected";}?>>Réservé</option>
              <option value="Disponible" <?php if($productinfo['status']=="Disponible"){echo "selected";}?>>Disponible</option>
            </select>
            <?php if (isset($_SESSION['errors']) && array_key_exists('productStatus', $_SESSION['errors'])) { ?>
              <div class="alert alert-danger mt-2">
                <?php echo $_SESSION['errors']['productStatus']; ?>
              </div>
            <?php } ?>
          </div>

          
          <!----booker---->
          <!--Scripts-->
          <?php include("layouts/scripts.php"); ?>
          <div class="form-group input-group" id="selectabooker">
            <select class="form-control" name="booker" id="booker" >
              <option value="" selected>Loué par</option>
              <?php foreach ($mygroupmembers as $groupmember) {?>
                <option value="<?php echo $groupmember['id']?>"><?php echo $groupmember['first_name'] . "&nbsp" . $groupmember['last_name']?></option>
              <?php } ?>
            </select>
            <?php if (isset($_SESSION['errors']) && array_key_exists('booker', $_SESSION['errors'])) { ?>
              <div class="alert alert-danger mt-2">
                <?php echo $_SESSION['errors']['booker']; ?>
              </div>
            <?php } ?>
          </div>
          <script>
              $("#productStatus").change(function() {
                  if ( $("#productStatus").val() == "Réservé" ){ document.getElementById("selectabooker").style.display = "flex"; }
                  if ( $("#productStatus").val() == "Disponible" ){ document.getElementById("selectabooker").style.display = "none"; }
              });
          </script>
          
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
              <option <?php if($productinfo['obj_condition']=="Neuf"){echo "selected";}?>>Neuf</option>
              <option <?php if($productinfo['obj_condition']=="Très bon état"){echo "selected";}?>>Très bon état</option>
              <option <?php if($productinfo['obj_condition']=="Correct"){echo "selected";}?>>Correct</option>
            </select>
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
            <a href="product.php?id=<?php echo $productinfo['id'] ?>">Annuler</a>
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

</body>

</html>