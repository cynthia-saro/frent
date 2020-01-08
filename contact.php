<?php
include("php/db.php");
?>

<?php include("layouts/head.php"); ?>

<body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php"); ?>

    <main id="homePage">
        <div>Nos locaux : 16 Boulevard Général de Gaulle, 44200 Nantes</div>
        <div>Téléphonez-nous : 
            <a href="tel:+33600000000">06 00 00 00 00</a>
        </div>
        <div>Vous avez une question ? Ecrivez-vous : 
            <a href="mailto:contact@frent.com"> contact@frent.com</a>
        </div>
    </main>

    <?php include("layouts/footer.php"); ?>

    <!--Scripts-->
    <?php include("layouts/scripts.php"); ?>

</body>

</html>