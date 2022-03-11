const formCreerQuestion = document.getElementById('formCreerQuestion');


const contentReponse = document.getElementById('contentReponse');
const pourGenererInput = document.getElementById('pourGenererInput');
const poubelle = "img/icones/ic-supprimer.png"
const typeDeReponseSelect = document.getElementById('typeDeReponseSelect')

{/* <div id="réponse" class="réponse">
<label>Réponse 1</label>
<input type="text" name="" id="typeText" placeholder="Donner le type de réponse">
<input type="checkbox" name="" id="typeCheckbox">
<input type="radio" name="" id="typeRadio">
<img src="<?= WEB_ROOT . "img" / "icones"/"ic-supprimer.png" ?>" alt="">
</div>
 */}



//~~~~~~~~~~~~~~~~~~Evénements~~~~~~~~~~~~~~~~~
// for (let i = 0; i < 5; i++) {
var i = 0

pourGenererInput.addEventListener('click', function (e) {
    i++
    generateur(e);
    e.preventDefault();
})



function generateur(e) {
   

    if (typeDeReponseSelect.value != "Type de réponse" && i < 5) {

        var div2 = document.createElement('div');
        div2.setAttribute('class', 'réponse')
        div2.setAttribute('id', 'réponse')
        contentReponse.appendChild(div2)
        e.preventDefault();

        var typelabel = document.createElement('label');
        typelabel.setAttribute('type', 'label')
        typelabel.setAttribute('for', 'typeText')
        typelabel.innerHTML = "Reponse" + i;
        div2.appendChild(typelabel)
        e.preventDefault();



        if (typeDeReponseSelect.value == "Text") {

            var typeText = document.createElement('input');
            typeText.setAttribute('class', 'typeText')
            typeText.setAttribute('type', 'text')
            typeText.setAttribute('id', 'typeText')
            div2.appendChild(typeText)
            e.preventDefault();
            i = 5
            // pourGenererInput.disabled= disabled

        } else
            if (typeDeReponseSelect.value == "choix multiple") {

                var typeText = document.createElement('input');
                typeText.setAttribute('class', 'typeText')
                typeText.setAttribute('type', 'text')
                typeText.setAttribute('id', 'typeText')
                div2.appendChild(typeText)
                e.preventDefault();

                var typeCheckbox = document.createElement('input');
                typeCheckbox.setAttribute('type', 'checkbox')
                // typeCheckbox.setAttribute('class','checkbox')
                typeCheckbox.setAttribute('id', 'typeCheckbox')
                div2.appendChild(typeCheckbox)
                e.preventDefault();

            } else
                if
                    (typeDeReponseSelect.value == "choix simple") {
                    var typeText = document.createElement('input');
                    typeText.setAttribute('class', 'typeText')
                    typeText.setAttribute('type', 'text')
                    typeText.setAttribute('id', 'typeText')
                    div2.appendChild(typeText)
                    e.preventDefault();

                    var typeRadio = document.createElement('input');
                    // typeRadio.setAttribute('class','typeRadio')
                    typeRadio.setAttribute('type', 'Radio')
                    typeRadio.setAttribute('id', 'typeRadio')
                    div2.appendChild(typeRadio)
                    e.preventDefault();

                }

        var imgPoubelle = document.createElement('img');
        imgPoubelle.setAttribute('src', poubelle)
        // typeRadio.setAttribute('id','typeRadio')
        imgPoubelle.setAttribute('onclick', 'parentNode.remove()')
        div2.appendChild(imgPoubelle)

    } else {
        alert("go to heven");

        }
}