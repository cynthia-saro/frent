<?php
include("php/db.php");
include("layouts/head.php");
include("php/get_myProfilInfo.php");
?>

<body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php"); ?>

    <main>
        <article class="card-body mx-auto" style="max-width: 400px;">
            <form method="post" action="php/edit_profil.php">
                <div class="registerCreateGroup">Modifier mon profil</div>

                <!----first name---->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="first_name" id="first_name" class="form-control" placeholder="Prénom" type="text" value="<?php echo $myprofilinformation['first_name'] ?>">
                </div>
                <!---Errors---->
                <?php if (isset($_SESSION['errors']) && array_key_exists('first_name', $_SESSION['errors'])) { ?>
                    <div class="alert alert-danger mt-2">
                        <?php echo $_SESSION['errors']['first_name']; ?>
                    </div>
                <?php } ?>

                <!----last name---->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="last_name" id="last_name" class="form-control" placeholder="Nom" type="text" value="<?php echo $myprofilinformation['last_name'] ?>">
                </div>
                <?php if (isset($_SESSION['errors']) && array_key_exists('last_name', $_SESSION['errors'])) { ?>
                    <div class="alert alert-danger mt-2">
                        <?php echo $_SESSION['errors']['last_name']; ?>
                    </div>
                <?php } ?>

                <!------Phone number------>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input name="phone_number" id="phone_number" class="form-control" placeholder="Numéro de téléphone" type="tel" value="<?php echo $myprofilinformation['phone_number'] ?>">
                </div>
                <?php if (isset($_SESSION['errors']) && array_key_exists('phone_number', $_SESSION['errors'])) { ?>
                    <div class="alert alert-danger mt-2">
                        <?php echo $_SESSION['errors']['phone_number']; ?>
                    </div>
                <?php } ?>

                <!---------Email--------->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" id="email" class="form-control" placeholder="Email" type="email" value="<?php echo $myprofilinformation['email'] ?>">
                </div>
                <?php if (isset($_SESSION['errors']) && array_key_exists('email', $_SESSION['errors'])) { ?>
                    <div class=" alert alert-danger mt-2">
                        <?php echo $_SESSION['errors']['email']; ?>
                    </div>
                <?php } ?>

                <!------BUTTONS------->
                <div class="buttonsColumn">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Modifier</button>
                    </div>
                    <button type="button" class="btn btn-danger btn-block"><a class="linktootherpage" href="php/delete_profil.php">Supprimer mon profil</a></button>
                    <a class="cancelButton" href="my_profil.php">Annuler</a>
                </div>
            </form>
        </article>
    </main>

    <?php include("layouts/footer.php"); ?>

    <!--Scripts-->
    <?php include("layouts/scripts.php"); ?>

</body>

</html>