<?php
    try{
        $db = new PDO('mysql:hostname=127.0.0.1;dbname=swaag', 'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET time_zone= '+00:00', NAMES utf8"));
    }
    catch(Exception $e){
        die('<span style="color:#d55050;">Probl&egrave;me de connexion &agrave; la base de donn&eacute;es.</span>');
    }