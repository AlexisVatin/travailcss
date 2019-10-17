<?php

    $probleme = $_GET['probleme'];
    $email = $_GET['email'];
    $commentaire = $_GET['commentaire'];
    $commentaire = $commentaire . PHP_EOL . 'De : ' . $email;
    $to = 'thomas.rippol@etu.univ-amu.fr';

    mail($to,$probleme,$commentaire);

    header('location: index.php')

?>