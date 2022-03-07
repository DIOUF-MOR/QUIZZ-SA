<?php
require_once PATH_VIEWS . DIRECTORY_SEPARATOR . "include" . DIRECTORY_SEPARATOR . "header.html.php";
?>
<div class="contentInscrir">
    <div class="formInscrire">
        <h1>S'INSCRIRE</h1>
        <p>Pour tester votre niveau de culture générale</p>
        <form id="formInscription" action="accueil" method="POST">

        <input type="hidden" name="controller" value="securite">
        <input type="hidden" name="action" value="inscription">
      
            <label for="prenom">prenom</label>
            <input type="text" name="prenom" placeholder="Aaaaa">

            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="BBBB">

            <label for="loginInscription">Login</label>
            <input type="text" name="loginInscription" id="loginInscription" placeholder="aabaab">

            <label for="passwordInscription">Password</label>
            <input type="password" name="passwordInscription" id="passwordInscription" placeholder="qqqqqqqqqq" border(style="color:aqua" solid 1px)>

            <label for="passwordInscription">PasswordConfirmed</label>
            <input type="password" name="passwordInscription" id="passwordInscription" placeholder="qqqqqqqqqq" border(style="color:aqua" solid 1px)>
            
            <p>Avatar</p> <button>Choisir un fichier</button> <button>Creer compte</button>
        </form>
    </div>
    <div class="fotoAv">
    <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."logo-QuizzSA.png" ?>" alt="">
    <p>Avatar du joueur</p>
    </div>
</div>



<?php
require_once PATH_VIEWS . DIRECTORY_SEPARATOR . "include" . DIRECTORY_SEPARATOR . "footer.html.php";
?>


