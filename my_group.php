<?php
include("php/db.php");
include("layouts/head.php");
include("php/get_myGroup.php");
?>

<body>

  <?php include_once('./components/debug.php'); ?>

  <?php include("layouts/header.php"); ?>

  <main id="homePage">

    <div class="pageName"><?php echo $mygroup["name"] ?></div>

    <div class="infoGroup">
      <div class="groupDate"><?php echo ("Crée le : ") . $mygroup["date_created"] ?></div>
      <div class="groupDescription"><?php echo $mygroup["group_description"] ?></div>
      <div class="admin">
        <?php echo ("Admin : ")  ?>
        <a href="profil.php?iduser=<?php echo $admin['id'] ?>"> <?php echo $admin['first_name'] . "&nbsp" . $admin['last_name'] ?> </a>
      </div>
      <?php if ($mygroup["adminId"] == $_SESSION['member']['id']){?>
        <a href="#" class="groupModify">Modifier</a>
      <? } ?>
    </div>

    <div class="allMembers">
        <?php foreach ($mygroupmembers as $groupmember) {
          ?>
          <a href="profil.php?iduser=<?php echo $groupmember['id'] ?>">
            <img class="productPicture" src="<?php echo $groupmember['picture']?>"/>
            <div><?php echo $groupmember['first_name'] . '&nbsp' . $groupmember['last_name'] ?></div>
            <div><?php echo $groupmember['email'] ?></div>
          </a>
        <?php } ?>
    </div>

  </main>

  <?php include("layouts/footer.php"); ?>

  <!--Scripts-->
  <?php include("layouts/scripts.php"); ?>

</body>

</html>