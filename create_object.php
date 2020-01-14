<?php
include("php/db.php");
include("layouts/head.php");
?>

<body>

  <?php include_once('./components/debug.php'); ?>

  <?php include("layouts/header.php"); ?>

  <main>
    <article class="card-body mx-auto" style="max-width: 400px;">
      <!--<article class="card-body mx-auto" style="max-width: 400px;">-->
      <div class="">Ajouter un objet</div>

      <!---Form---->
      <form action="php/create_object.php" method="POST" enctype="multipart/form-data">
        <!---Post n'affiche pas les infos--->

        <!------pictureProduct------>
        <div class="form-group input-group">
          <input type="hidden" name="MAX_FILE_SIZE" value="3000000000" />
          <input type="file" name="pictureProduct" id="pictureProduct">
        </div>
        <!---Errors---->
        <?php if (isset($_SESSION['errors']) && array_key_exists('pictureProduct', $_SESSION['errors'])) { ?>
          <div class="alert alert-danger mt-2">
            <?php echo $_SESSION['errors']['pictureProduct']; ?>
          </div>
        <?php } ?>

        <!----productName---->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-quote-left"></i> </span>
          </div>
          <input name="productName" id="productName" class="form-control" placeholder="Nom du produit" type="text">
        </div>
        <!---Errors---->
        <?php if (isset($_SESSION['errors']) && array_key_exists('productName', $_SESSION['errors'])) { ?>
          <div class="alert alert-danger mt-2">
            <?php echo $_SESSION['errors']['productName']; ?>
          </div>
        <?php } ?>

        <!----productCondition---->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-check-circle"></i> </span>
          </div>
          <select class="form-control" name="productCondition" id="productCondition">
            <option disabled selected hidden>État de l'objet</option>
            <option>Neuf</option>
            <option>Très bon état</option>
            <option>Correct</option>
          </select>
        </div>
        <?php if (isset($_SESSION['errors']) && array_key_exists('productCondition', $_SESSION['errors'])) { ?>
          <div class="alert alert-danger mt-2">
            <?php echo $_SESSION['errors']['productCondition']; ?>
          </div>
        <?php } ?>

        <!-----productDescription----->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-align-justify "></i> </span>
          </div>
          <input name="productDescription" id="productDescription" class="form-control" placeholder="Description de l'object" type="textarea">
        </div>
        <?php if (isset($_SESSION['errors']) && array_key_exists('productDescription', $_SESSION['errors'])) { ?>
          <div class="alert alert-danger mt-2">
            <?php echo $_SESSION['errors']['productDescription']; ?>
          </div>
        <?php } ?>

        <!------BUTTONS------->
        <div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
          </div>
          <a href="index.php">Annuler</a>
        </div>


      </form>

    </article>
  </main>

  <?php include("layouts/footer.php"); ?>

  <!--Scripts-->
  <?php include("layouts/scripts.php"); ?>

</body>

</html>