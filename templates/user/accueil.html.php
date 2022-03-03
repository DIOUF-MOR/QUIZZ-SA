<?php
    require_once PATH_VIEWS.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."header.html.php";
?>
<div class="conteneur">

    <div class="entete">
        <h1>CRÉEZ ET PARAMÉTREZ VOS QUIZZ</h1>
        <a href="<?=WEB_ROOT."?controller=securite&action=connexion"?>">
        <span>Déconnexion</span>
        </a>
    </div>

    <div class="corp">
        <div class="conste">
            <div class="menu">
                <div class="toph">
                    <img src="bg.png" alt="">
                    <h1>AAA</h1>
                    <H1>BBB</H1>
                </div>
                <div class="lesA">
                    <a href="">Liste Questions</a><img src="ic-liste.png" alt="">
                    <a href="">Créer Admin</a><img src="ic-ajout-active.png" alt="ic-ajout-active">
                    <a href="">Liste joueurs</a><img src="ic-liste-active.png" alt="ic-liste-active">
                    <a href="">Créer Questions</a><img src="ic-ajoue.png" alt="">
                </div>
            </div>
        </div>
        <div class="variable">
            liste des joueur par score
        </div>
    </div>
</div>



<?php
    require_once PATH_VIEWS.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."footer.html.php";
?>