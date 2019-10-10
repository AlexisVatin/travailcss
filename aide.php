<?php
    require_once 'utils.pages.php';
    my_header(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contact</title>
</head>

<body>
<h1>Contact</h1>
<form method="post">

</form>
<?php
if(isset($_POST['message'])){
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . $_POST['email'] . "\r\n";

    $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
    <p><b>Nom : </b>' . $_POST['nom'] . '<br>
    <b>Email : </b>' . $_POST['email'] . '<br>
    <b>Message : </b>' . $_POST['message'] . '</p>';

    $retour = mail('destinataire@free.fr', 'Envoi depuis page Contact', $message, $entete);
    if($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
}
?>
</body>
</html>

<?php
    my_footer(); ?>