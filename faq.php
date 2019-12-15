<?php
include("php/db.php");
?>

<?php include("layouts/head.php"); ?>

<body>

    <?php include_once('./components/debug.php'); ?>

    <?php include("layouts/header.php"); ?>

    <main id="homePage">
        <div class="panel-group" id="faqAccordion">
            <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                    <h4 class="panel-title">
                        <a href="#" class="ing">Comment ajouter un produit ?</a>
                    </h4>

                </div>
                <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">

                        <p>Pour ajouter un produit, il suffit de se rendre sur la <a href="index.php">page d’accueil</a> en cliquant sur le logo dans la barre de navigation. Un bouton vert est fixé en bas de l’écran, il vous redirigera vers la page de création d’un produit. Ce bouton est également visible sur les pages “mes objets”, “mes réservations”, “mes favoris”.</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                    <h4 class="panel-title">
                        <a href="#" class="ing">Comment réserver un produit ?</a>
                    </h4>

                </div>
                <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">

                        <p>La réservation d’un produit se fait hors de la plateforme avec la personne mettant en location son objet. Pour réserver un objet, il faut se rendre sur la page produit ; deux boutons vous permettront de contacter le propriétaire via email ou téléphone. Lorsque vous récupérerez et rendez le produit, le propriétaire doit directement changer le statut de l’objet (soit réservé ou disponible).</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                    <h4 class="panel-title">
                        <a href="#" class="ing">Qu’est ce qu’un admin ? </a>
                    </h4>

                </div>
                <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                        <p>Un admin (administrateur) est la personne qui a créé le groupe et qui peut le gérer. Il possède des fonctionnalités supplémentaires tel qu’ajouter un nouvel utilisateur ou modifier la description du groupe.</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                    <h4 class="panel-title">
                        <a href="#" class="ing">Comment trouver et contacter l’admin du groupe ?</a>
                    </h4>

                </div>
                <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                        <p>Pour connaître l’admin de votre groupe, il vous faut aller sur la page <a href="my_group.php">“Mon groupe”</a, il sera marqué en bas de la description. Vous pouvez afficher son profil en cliquant sur son nom. Par la suite vous pourrez accéder à ses coordonnées.</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                    <h4 class="panel-title">
                        <a href="#" class="ing">Comment me déconnecter ? </a>
                    </h4>

                </div>
                <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                        <p>Pour se déconnecter, il suffit d’aller sur votre <a href="my_profil.php">profil</a> en cliquant sur l’icon de profil en haut à droite de l’écran sur la barre de navigation. Une fois sur votre page, vous trouverez un bouton de déconnexion.</p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                    <h4 class="panel-title">
                        <a href="#" class="ing">Où puis-je trouver tous les membres de mon groupe ?</a>
                    </h4>

                </div>
                <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                        <p>Vous pouvez voir tous les membres de votre groupe sur la page <a href="my_group.php">“Mon groupe”</a> dans le menu.</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php include("layouts/footer.php"); ?>

    <!--Scripts-->
    <?php include("layouts/scripts.php"); ?>

</body>

</html>