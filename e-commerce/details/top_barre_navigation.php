<div class="top-nav-bar">
    <div class="search-box">
        <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
        <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
        <!-- <img src="images/logo.png" class="logo"> -->
        <div class="footer-section about">
                <h1 class="logo"><span>Dakar</span>Vente</h1>
        </div>
        <input type="text" class="form-control" placeholder="Chercher sur DakarVente...">
        <span class="input-group-text"><i class="fa fa-search"></i></span>
    </div>
    <div class="menu-bar">
            <ul class="ul">
<?php
    if(isset($_SESSION['user_connecte']) && !empty($_SESSION['user_connecte'])){
        $info_user = $db->prepare('SELECT * FROM users WHERE id=?');
        $info_user->execute(array($_SESSION['user_connecte']));
        while($result_info_users = $info_user->fetch()){
            $prenom=$result_info_users['prenom'];
            $nom=$result_info_users['nom'];
        }
?>
               <li class="menu-bar-1"><span class="p1"><?php echo $prenom.' '.$nom;?></span></li>
               <div id="text">
                   <ul>
                       <li><a href="./page_user/index_user.php">Tableau de bord</a></li>
                       <li><a href="#">Mes Annonces</a></li>
                       <li><a href="#">Mes Ventes</a></li>
                       <li><a href="#">Mes favoris</a></li>
                       <li><a href="../details/log_out.php">Déconnexion</a></li>
                   </ul>
               </div>
<?php
    }else{
?>
                <li class="menu-bar-1"><a href="" title="Se connecter" id="show_popup"><i class="fa fa-lock"></i> Se
                      connecter</a></li>
<?php
    }
?>
                <li class="menu-bar-1"><a href="#" title="Poster une annonce" id="show_popup_poster"><i class="fa fa-plus"></i> Poster une
                        annonce</a></li>
                <!-- <li><a href="#">Log In</a></li> -->
            </ul>
    </div>
    <?php include "liste_produit.php"; ?>

</div>
<script>
    $('#text').hide()
            $('.p1').on('click',function(){
                $('#text').toggle()
            })
</script>