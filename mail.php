<?php

    $probleme = $_GET['probleme'];
    $email = $_GET['email'];
    $commentaire = $_GET['commentaire'];
    $to = 'thomas.rippol@etu.univ-amu.fr';

    mail($to,$probleme,$commentaire)


?>