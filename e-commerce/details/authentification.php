<?php
session_start();
    include "../bdd/db.php";
    // ===============partie connexion=======
    if(isset($_POST['connexion']) 
    && isset($_POST['signin']) && $_POST['signin'] == "signin" 
    && isset($_POST['somme_text']) && $_POST['somme_text'] == ''){
        // echo "partie connexion";
        $login_soumis = strip_tags($_POST['email_connexion']); 
        $pass_soumis = strip_tags($_POST['pass_connexion']);
        $pass_hashe = hash("sha512",$pass_soumis);

        if($login_soumis && $pass_soumis){
            $compte_exist = $db->prepare('SELECT * FROM users WHERE email=? AND pass=?');
            $compte_exist->execute(array($login_soumis,$pass_hashe));
            $nbr_compte=$compte_exist->rowCount();
            // echo $nbr_compte;
            if($nbr_compte==1){
                while($info_users = $compte_exist->fetch()){
                    $_SESSION['user_connecte'] = $info_users['id'];
                    header('Location: ../index.php');
                }
                
            }else if($nbr_compte==0){
                echo '<span style="color:red;">Email ou Mot de passe incorrect</span>';
            }else if($nbr_compte>1){
                echo '<span style="color:red;">Multiple compte trouve</span>';
            }
            
        }
    }
    // =================partie inscription=======
    else if(isset($_POST['inscrire']) 
    && isset($_POST['register']) && $_POST['register'] == "register" 
    && isset($_POST['inscr']) && $_POST['inscr'] == ''){
        echo "partie inscription";
    }
?>