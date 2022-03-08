const formInscription=document.getElementById('formInscription');
const prenomInscription=document.getElementById('prenomInscription');
const prenomInscriptionError=document.getElementById('prenomInscriptionError');
const nomInscription=document.getElementById('nomInscription');
const nomInscriptionError=document.getElementById('nomInscriptionError');
const loginInscription=document.getElementById('loginInscription');
const loginInscriptionError=document.getElementById('loginInscriptionError');
const passwordInscription=document.getElementById('passwordInscription');
const passwordInscriptionError=document.getElementById('passwordInscriptionError');

loginInscription.addEventListener('input',function(){
    if (loginInscription.value!='mbaye') {
        loginInscription.style.backgroundColor="red"
        loginInscriptionError.innerText='you are not write Mbaye'
    }else{
        loginInscription.style.backgroundColor="green"
        loginInscriptionError.innerText='Great hi Mbaye'


    }

})

