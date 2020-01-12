<?php
include("php/db.php");
include("layouts/head.php");
?>

<body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php"); ?>

    <main id="homePage">
        <div class="contactLabel">Notre adresse : </div>
        <div>16 Boulevard Général de Gaulle, 44200 Nantes</div>
        <div class="contactLabel">Téléphonez-nous : </div>
        <a href="tel:+33600000000">06 00 00 00 00</a>
        <div class="contactLabel">Vous avez une question ? Ecrivez-vous : </div>
        <a href="mailto:contact@frent.com"> contact@frent.com</a>
    </main>

    <?php include("layouts/footer.php"); ?>

    <!--Scripts-->
    <?php include("layouts/scripts.php"); ?>

</body>

</html>