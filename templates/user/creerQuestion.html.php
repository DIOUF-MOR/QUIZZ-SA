<div class="conteneurCreerQuestion">
    <h2 style='color:#50bed0'>PARAMETRER VOTRE QUESTION</h2>
    <form class="formCreerQuestion" action="" method="POST">
        <div class="question">
            <label>Question</label>
            <input type="text" name="" id="">
        </div>
        <div class="nbreDePoint">
            <label>Nbre de Points</label>
            <input type="number" name="" id="">
        </div>
        <div class="typeDeReponse">
            <label>Type de réponse</label>
            <select name="" id="typeDeReponseSelect">
                <option value="">Type de réponse</option>
                <option value="">choix multiple</option>
                <option value="">choix simple</option>
                <option value="">Text</option>
            </select>
            <button>+</button>
        </div>
        <div class="réponse">
            <label>Réponse 1</label>
            <input type="text" name="" id="typeText" placeholder="Donner le type de réponse">
            <input type="checkbox" name="" id="typeCheckbox">
            <input type="radio" name="" id="typeRadio">
            <img src="<?= WEB_ROOT . "img" . DIRECTORY_SEPARATOR . "icones" . DIRECTORY_SEPARATOR . "ic-supprimer.png" ?>" alt="">
        </div>
        <div class="buttonEnregistrer"><button>Enregistrer</button></div>
    </form>
</div>