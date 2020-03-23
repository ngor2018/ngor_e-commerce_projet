<?php
    session_start();
    include "bdd/db.php";
?>
<!-- <!DOCTYPE html> -->

<html>

<head>
    <?php include "style/head.php"?>
</head>
<body>
    <div id="transparent_black_background"></div>
    <?php 
            // echo hash("sha512", 'Dakar2018');
            //  echo $_SESSION['user_connecte'];
            include "details/top_barre_navigation.php";
            include "details/total_produit.php";   
            include "details/connexion_inscription.php";  
            
        ?>



    

















    <script src="js/jquery-3.4.1.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.hislide.js"></script>
    <script src="js/traitement_script.js"></script>
    <script type="text/javascript">
        $('#show_popup,#show_popup_poster').on('click', function (e) {
            e.preventDefault();
            $('#transparent_black_background').show();
            $('#popup_form').show();
        });

        $('#close-popup_form, #transparent_black_background').on('click', function () {
            $('#transparent_black_background').hide();
            $('#popup_form').hide();
        });
        $('#main_form').on('submit', function (event) {
            // event.preventDefault();
        });
        $('#show_sub_menu').on('click', function () {
            $('#div-image').toggle();
        });	
        var x=document.getElementById('Identifier');
            var y=document.getElementById('Inscrire');
            var z=document.getElementById('btn');
            function Inscrire(){
                x.style.left='-480px';
                y.style.left='50px';
                z.style.left='110px';
            }
            function Identifier(){
                x.style.left='50px';
                y.style.left='450px';
                z.style.left='0px';
            }
            
            // $('.p1').hover(function(){
            //     $('#text').css('display','inherit').fa

            // },function(){
            //     $('#text').css('display','none')
            // })
            // $('.p1').on({
            //     mouseenter:function(){
            //         $('#text').show()
            //     },
            //     mouseleave:function(){
            //         $('#text').hide()
            //     }
            // })
    </script>
    
</body>

</html>