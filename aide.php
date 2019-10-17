<?php
    require_once 'utils.pages.php';
    my_header(); ?>

    <div id="divconnexion" style="visibility: hidden">
        <h3> Connexion </h3><br>
        <form method="" id="form" class="formIC" action="">
            <label>Nom utilisateur :</label><br>
            <input type="text" class="inputform" name="username">
            <br><br>
            <label>Mot de passe :</label><br>
            <input type="password" class="inputform" name="password">
            <br><br>
            <a href=""> Mot de passe oublié ? </a>
            <br><br>
            <input type="Submit" class="boutonform" value="Validation">

        </form>
    </div>

    <div id="divinscription" style="visibility: hidden">
        <h3> Inscription </h3><br>
        <form method="" id="form" class="formIC" action="">
            <label> Pseudo : </label><br>
            <input type="text" class="inputform" name="username">
            <br><br>
            <label> Mot de passe : </label><br>
            <input type="password" class="inputform" name="password">
            <br><br>
            <label> Vérification mot de passe : </label><br>
            <input type="password" class="inputform" name="password">
            <br><br>
            <label> Adresse mail : </label><br>
            <input type="text" class="inputform" name="mail">
            <br><br>
            <input type="Submit" class="boutonform" value="Validation">

        </form>
    </div>
<?php
    require_once 'mainViewHelp.php';
    my_footer(); ?>