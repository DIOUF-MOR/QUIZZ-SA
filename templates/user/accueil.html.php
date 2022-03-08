<?php
require_once PATH_VIEWS . DIRECTORY_SEPARATOR . "include" . DIRECTORY_SEPARATOR . "header.html.php";
?>
<div class="conteneur">

    <div class="entete">
        <h1>CRÉEZ ET PARAMÉTREZ VOS QUIZZ</h1>
        <a href="<?= WEB_ROOT . "?controller=securite&action=deconnexion" ?>">
            <span>Déconnexion</span>
        </a>
    </div>

    <div class="corp">

        <div class="conste">
            <div class="meNu">
                <div id="toph">
                    <img src="<?= WEB_ROOT . "img" . DIRECTORY_SEPARATOR . "icones" . DIRECTORY_SEPARATOR . "logo-QuizzSA.png" ?>" alt="">
                </div>
                <span>AAA<br>BBB</span>
                <span></span>
            </div>

            <div class="lesA">;
                <?php if (is_admin()) : ?>
                    <span><a href="">Liste Questions<img src="<?= WEB_ROOT . "img" . DIRECTORY_SEPARATOR . "icones" . DIRECTORY_SEPARATOR . "ic-liste.png" ?>" alt=""></a></span>
                    <span><a href="<?= WEB_ROOT . "?controller=user&action=creerAdmin"?>">Créer Admin<img src="<?= WEB_ROOT . "img" . DIRECTORY_SEPARATOR . "icones" . DIRECTORY_SEPARATOR . "ic-ajout.png" ?>" alt="ic-ajout-active"></a></span>
                    <span><a href="<?= WEB_ROOT . "?controller=user&action=accueil"?>">Liste joueurs<img src="<?= WEB_ROOT . "img" . DIRECTORY_SEPARATOR . "icones" . DIRECTORY_SEPARATOR . "ic-liste-active.png" ?>" alt="ic-liste-active"></a></span>
                    <span><a href="">Créer Questions<img src="<?= WEB_ROOT . "img" . DIRECTORY_SEPARATOR . "icones" . DIRECTORY_SEPARATOR . "ic-ajout.png" ?>" alt=""></a></span>
                <?php endif ?>
            </div>

        </div>

        <div class="variable">

            <?php
            echo $content_for_views;
            ?>

        </div>
    </div>
</div>



<?php
require_once PATH_VIEWS . DIRECTORY_SEPARATOR . "include" . DIRECTORY_SEPARATOR . "footer.html.php";
?>