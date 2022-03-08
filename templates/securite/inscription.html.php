
<div class="contentInscrir">
    
    <div class="formInscrire">
        <h2 style="color:black">S'INSCRIRE</h2>
        <h6>Pour tester votre niveau de culture générale</h6>
        <hr>
        <?= isset($enregistrer) ? $enregistrer : '' ?>
        <form id="formInscription" action="<?= WEB_ROOT ?>" method="POST">

            <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="inscription">

            <div class="inputInscription">
                <label for="prenom">prenom</label><br>
                <input type="text" name="prenom" id="prenomInscription" placeholder="prenom"><br>
                <span id="prenomInscriptionError"><?= isset($_SESSION["errors"]["prenom"]) ? $_SESSION["errors"]["prenom"] : "" ?></span>
            </div>

            <div class="inputInscription">
                <label for="nom">Nom</label><br>
                <input type="text" name="nom" id="nomInscription" placeholder="Nom"><br>
                <span id="nomInscriptionError"><?= isset($_SESSION["errors"]["nom"]) ? $_SESSION["errors"]["nom"] : "" ?></span>

            </div>

            <div class="inputInscription">
                <label for="loginInscription">Login</label><br>
                <input type="text" name="loginInscription" id="loginInscription" placeholder="Login"><br>
                <span id="loginInscriptionError"><?= isset($_SESSION["errors"]["loginInscription"]) ? $_SESSION["errors"]["loginInscription"] : "" ?></span>
            </div>
            <div class="inputInscription">
                <label for="passwordInscription">Password</label><br>
                <input type="password" name="passwordInscription" id="passwordInscription" placeholder="Password"><br>
                <span id="passwordInscriptionError"><?= isset($_SESSION["errors"]["passwordInscription"]) ? $_SESSION["errors"]["passwordInscription"] : "" ?></span>
            </div>

            <div class="inputInscription">
                <label for="confirmePassword">PasswordConfirmed</label><br>
                <input type="password" name="confirmePassword" id="confirmePassword" placeholder="Confirmer votre password"><br>
                <span id="confirmePasswordError"><?= isset($_SESSION["errors"]["confirmePassword"]) ? $_SESSION["errors"]["confirmePassword"] : "" ?></span>
            </div>
            <div class="avChoiFichier">
                <p>Avatar</p> <button>Choisir un fichier</button>
            </div>
            <div class="CreerCompte"><button>Creer compte</button></div>
        </form>
    </div>

    <div class="fotoAv">
        <img src="<?= WEB_ROOT . "img" . DIRECTORY_SEPARATOR . "icones" . DIRECTORY_SEPARATOR . "logo-QuizzSA.png" ?>" alt="">
        <H4>Avatar du joueur</H4>
    </div>

</div>

