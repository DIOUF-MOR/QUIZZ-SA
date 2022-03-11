const add = document.querySelector('.add');
const conteneur = document.querySelector('.conteneur');

function createur() {
    var i1 = document.createElement('i');
    i1.setAttribute('class','fa-solid fa-pen-to-square');

    var i2 = document.createElement('i');
    i2.setAttribute('class','fa-solid fa-trash');    

    var vert = document.createElement('div');
    vert.setAttribute('class','vert');
    vert.appendChild(i1);
    vert.appendChild(i2);

    var text=document.createElement('textarea');
    text.setAttribute('cols','30');
    text.setAttribute('rows','15');

    var stock=document.createElement('div');
    stock.setAttribute('class','stock');
    stock.appendChild(vert);
    stock.appendChild(text);

    conteneur.appendChild(stock);

    i1.addEventListener('click', function(){
        text.toggleAttribute('disabled');
        text.focus();
    });

    i2.addEventListener('click', function(){
        stock.parentNode.removeChild(stock);
    });


}

add.addEventListener('click',function() {
    createur();
});

window.onload = createur();