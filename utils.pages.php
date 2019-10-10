<?php
function my_header($stylesheet = './style.css', $img = './freenote-logo.png') {
    echo <<<EOT
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>FreeNote</title>
    <link rel="stylesheet" href="{$stylesheet}">
    <link rel="stylesheet" media="screen and (min-width: 1100px)" href="largestyle.css" type="text/css" />
    <script type="text/javascript" src="showmenu.js"></script>
    
</head>
<body>
    <header class="topHeader">
        <div class="headerLeftDiv">
            <a href="index.php"> <img src="{$img}" alt="Free Note, un forum normaux avec des gens normal :)" class="logoImg"></a>
        </div>
        <div class="headerCenterDiv">
        </div>
        <div class="headerRightDiv">
            <a class="sign" onclick="showmenu()" > Connexion </a>
            <a class="sign" onclick="showmenu2()" > Inscription </a>
        </div>
    </header>
EOT;
}
function mainView() {
    echo <<<EOT
<main class="main">
<nav class="corps">
        <h2> Les plus récents </h2>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>    </nav>

<nav class="corps">

        <h2> Présentation du concept </h2>
        <div class="presentation">
            <p>

	         Notre site est un réseau social novateur. Les discussions peuvent au maximum contenir X messages chacun composés de 1 ou 2 mots. 
	         Chaque utilisateur peut choisir de participer à un topic ouvert par un autre utilisateur ou par lui même. 
	         Chaque personne visiteur ou utilisateur peut consulter un topic ayant été ouvert récemment. Un utilisateur peut rechercher un sujet en particulier.
	         Il existe une fonctionnalité de "J'aime" pour indiquer qu'un topic est apprécié par la communauté.
	         
	         </p>
        </div>

</nav>
</main>
EOT;
}
function mostLiked(){
    echo <<<EOT
<nav class="corps">
        <h2> Les plus aimés </h2>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
    </nav>
EOT;
}
function my_footer() {
    echo <<<EOT
    <footer class="bottomFooter">
    <div class="divfooter">
        <img src = "/logogithub.png" alt="LogoGitHub" class="logogithub" title="Thomas RIPPOL" >
        <a href="https://github.com/Wowsnake"> Steffen ALVAREZ </a>
        <a href="https://github.com/ThomasRp"> Thomas RIPPOL </a>
        <a href="https://github.com/christophe-ruiz"> Christophe RUIZ </a>
        <a href="https://github.com/AlexisVatin"> Alexis VATIN </a>
    </div>
    
    <div class="divfooter">
           
        <h3> Copyright 2019 </h3>
        <img src="/freenote-logo.png" alt="Free Note, un forum normaux avec des gens normal :)" class="logoImgfooter">
    </div>
        
    <div class="divfooter divfooterdroit">
        <a href="aide.php"> <img src="/help.png" alt="aide" title="Aide" class="help"> </a>
        <a href="#"> <img src="/flechehaut.png" alt="flecheverslehaut" title="Haut de la page" class="flechehaut"> </a>
    </div>
    
    </footer>
</body>
</html>
EOT;
}