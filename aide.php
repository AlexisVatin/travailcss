<?php
    require_once 'utils.pages.php';
    my_header(); ?>

    <div id="divconnexion" style="visibility: hidden">
        <h3> Connexion </h3>
        <form method="" id="form" class="formIC" action="">
            <label>Nom utilisateur :</label>
            <input type="text" class="inputform" name="username">
            <label>Mot de passe :</label>
            <input type="password" class="inputform" name="password">
            <a href=""> Mot de passe oublié ? </a>
            <input type="Submit" class="boutonform" value="Validation">

        </form>
    </div>

    <div id="divinscription" style="visibility: hidden">
        <h3> Inscription </h3>
        <form method="" id="form" class="formIC" action="">
            <label> Pseudo : </label>
            <input type="text" class="inputform" name="username">
            <label> Mot de passe : </label>
            <input type="password" class="inputform" name="password">
            <label> Vérification mot de passe : </label>
            <input type="password" class="inputform" name="password">
            <label> Adresse mail : </label>
            <input type="text" class="inputform" name="mail">
            <input type="Submit" class="boutonform" value="Validation">

        </form>
    </div>

<?php
    require_once 'mainViewHelp.php';
    my_footer(); ?>