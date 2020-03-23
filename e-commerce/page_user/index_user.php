<title>E-Commerce Website </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style_container.css">
    <link rel="stylesheet" href="../style/style_connexion_inscription.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<?php
    session_start();
    include "../bdd/db.php";
    if(!isset($_SESSION['user_connecte']) || empty($_SESSION['user_connecte'])){
        header('Location: ../index.php');
    }
    include "../details/top_barre_navigation.php";
?>
<section class="using_config_section">
    <div class="info_user">
        <div class="profil_container">
            <div class="user_image">
                <img class="img_user" src="../images/user.png" alt="">
            </div>
            <div class="content">
                <a class="name" href="#">Pape Ngor Faye</a>
                <p class="localisation">
                    <i class="fa fa-map-marker"></i>
                    <span>Sénégal</span>
                </p>
                <a class="modifier_compte" href="">
                    <i class="fa fa-cogs"></i>
                    <span>Modifier mon profil</span>
                </a>
            </div>
        </div>
        <div class="autre_infos_user">
            <div class="profil_container_suite">
                <p>fayepapengor238@gmail.com</p>
            </div>
            <div class="lieu_user">
                <span>Adresse & Ville : Dakar,Rufisque</span>
            </div>
        </div>
    </div>
</section>