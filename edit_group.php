<?php
include("php/db.php");
include("layouts/head.php");
include("php/get_myGroup.php");
?>

<body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php"); ?>

    <main>
        <article class="card-body mx-auto">
            <?php if ($_SESSION['member']['id'] ==  $mygroup['adminId']) { ?>
                <form method="post" action="php/edit_group.php">
                    <div class="registerCreateGroup">Modifier votre groupe</div>

                    <!----Group id---->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa fa-users"></i> </span>
                        </div>
                        <input name="group" id="group" class="form-control" placeholder="Identifiant de groupe" type="text" value="<?php echo $mygroup['identification_key'] ?>">
                    </div>
                    <?php if (isset($_SESSION['errors']) && array_key_exists('group', $_SESSION['errors'])) { ?>
                        <div class="alert alert-danger mt-2">
                            <?php echo $_SESSION['errors']['group']; ?>
                        </div>
                    <?php } ?>

                    <!----Group name---->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-tag"></i> </span>
                        </div>
                        <input name="group_name" id="group_name" class="form-control" placeholder="Nom du groupe" type="text" value="<?php echo $mygroup['name'] ?>">
                    </div>
                    <?php if (isset($_SESSION['errors']) && array_key_exists('group_name', $_SESSION['errors'])) { ?>
                        <div class="alert alert-danger mt-2">
                            <?php echo $_SESSION['errors']['group_name']; ?>
                        </div>
                    <?php } ?>

                    <!----Group description---->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-align-justify"></i> </span>
                        </div>
                        <input name="group_description" id="group_description" class="form-control" placeholder="Description du groupe" type="text" value="<?php echo $mygroup['group_description'] ?>">
                    </div>
                    <?php if (isset($_SESSION['errors']) && array_key_exists('group_description', $_SESSION['errors'])) { ?>
                        <div class="alert alert-danger mt-2">
                            <?php echo $_SESSION['errors']['group_description']; ?>
                        </div>
                    <?php } ?>

                    <!------BUTTONS------->
                    <div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Modifier</button>
                        </div>
                        <a href="my_group.php">Annuler</a>
                        <button type="button" class="btn btn-danger"><a href="php/delete_group.php">Supprimer le groupe</a></button>
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