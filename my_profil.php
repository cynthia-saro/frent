<?php
include("php/db.php");
include("layouts/head.php");
include("php/get_myProfilInfo.php");
?>

<body>

  <?php include_once('./components/debug.php'); ?>

  <?php include("layouts/header.php"); ?>

  <main id="homePage">
    <div class="introProfil">
      <img class="profilImage" src="<?php echo $myprofilinformation['picture'] ?>" />
      <div class="introProfilContent">
        <div class="firstNameAndLastName"><?php echo $myprofilinformation["first_name"] . '&nbsp ' . $myprofilinformation["last_name"] ?></div>
        <div class="profilEmail"><?php echo $myprofilinformation["email"] ?></div>
        <div class="phoneNumber">0<?php echo $myprofilinformation["phone_number"] ?></div>
      </div>
      <div>
        <a href="#" class="profilGoEdit">Modifier</a>
        <a href="php/logout.php" class="profilGoEdit">Se déconnecter</a>
      </div>
    </div>

    <div id="profilobjects">

      <div class="filterBar">
        <a v-bind:class="{ 'active': display == 'objets'}" v-on:click="display = 'objets'">Mes objets</a>
        <a v-bind:class="{ 'active': display == 'bookings'}" v-on:click="display = 'bookings'">Mes réservations</a>
      </div>

      <div v-if="display == 'objets'" class="objets homeContentObjects">
        <?php
        foreach ($profilobjects as $object) {
        ?>
          <a href="product.php?id=<?php echo $object['id'] ?>">
            <div class="object">
              <img class="productPicture" src="<?php echo $object['picture'] ?>" />
              <div class="productName"><?php echo $object['name'] ?></div>
              <?php if ($object["status"] == "Réservé") { ?>
                <div class="objBooked"><?php echo $object["status"] ?></div>
              <?php } ?>
              <?php if ($object["status"] == "Disponible") { ?>
                <div class="objFree"><?php echo $object["status"] ?></div>
              <?php } ?>
            </div>
          </a>
        <?php } ?>
      </div>

      <div v-if="display == 'bookings'" class="bookings homeContentObjects">
        <?php
        foreach ($profilbookings as $book) {
        ?>
          <a href="product.php?id=<?php echo $book['id'] ?>">
            <div class="object">
              <img class="productPicture" src="<?php echo $book['picture'] ?>" />
              <div class="productName"><?php echo $book['name'] ?></div>
              <?php if ($book["status"] == "Réservé") { ?>
                <div class="objBooked"><?php echo $book["status"] ?></div>
              <?php } ?>
              <?php if ($book["status"] == "Disponible") { ?>
                <div class="objFree"><?php echo $book["status"] ?></div>
              <?php } ?>
            </div>
          </a>
        <?php } ?>
      </div>

    </div>

  </main>

  <?php include("layouts/footer.php"); ?>

  <!--Scripts-->
  <?php include("layouts/scripts.php"); ?>
  <script>
    var demo = new Vue({
      el: '#profilobjects',
      data: {
        display: 'objets',
      }
    });
  </script>

</body>

</html>