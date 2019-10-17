<?php

    $probleme = $_GET['probleme'];
    $email = $_GET['email'];
    $commentaire = $_GET['commentaire'];
    $commentaire = $commentaire . PHP_EOL . 'De : ' . $email;
    $to = 'support@cruiz.fr';

    mail($to,$probleme,$commentaire);

    header('location: index.php')

?>