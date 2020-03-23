<!-- <?php
    echo hash("sha512", 'Dakar2018');
    
?> -->
<div id="main_form">
            <div class="form-box" id="popup_form">
            <span id="close-popup_form">X</span>
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="Identifier()">Identifier</button>
                    <button type="button" class="toggle-btn" onclick="Inscrire()">Inscrire</button>
                </div>
                <div class="social-icons">
                    <!-- <img src="images/facebook-orange.png" alt="">
                    <img src="images/20-203783_twitter-logo-png-orange-twitter-logo-transparent-png.png" alt="">
                    <img src="images/google.png" alt=""> -->
                    <h1>DakarVente</h1>
                </div>
                <form action="details/authentification.php" id="Identifier" class="input-group" method="POST">
                    <input type="text" name="email_connexion" class="input-field" placeholder="Entrez votre Email">
                    <input type="password" name="pass_connexion" class="input-field" placeholder="Entrez votre mot de passe">
                    <a href="#" class="souvenir_pass">Mot de passe oublié</a>
                    <input type="text" name="somme_text" style="display:none;">
                    <input type="hidden" value="signin" name="signin">
                    <input type="submit" name="connexion" class="submit_btn_1" value="Se connecter">
                </form>
                <form action="details/authentification.php" id="Inscrire" class="input-group" method="POST">
                    <input type="text" name="inscr" style="display:none;">
                    <input type="hidden" value="register" name="register">
                    <input type="email" name="email_inscrire" class="input-field" placeholder="Entrez votre Email">
                    <input type="password" name="pass_inscrire" class="input-field" placeholder="Mot de passe">
                    <input type="password" name="conf_pass_inscrire" class="input-field" placeholder="Confirmation mot de passe">
                    <input type="checkbox" class="chech-box_2"><span class="span_condition">J'accepte les termes & conditions</span>
                    <input type="submit" name="inscrire" class="submit_btn_2" value="S'inscrire">
                </form>
            </div>
        </div>