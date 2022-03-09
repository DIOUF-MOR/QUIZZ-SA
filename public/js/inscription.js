const formInscription=document.getElementById('formInscription');
const prenomInscription=document.getElementById('prenomInscription');
const prenomInscriptionError=document.getElementById('prenomInscriptionError');
const nomInscription=document.getElementById('nomInscription');
const nomInscriptionError=document.getElementById('nomInscriptionError');
const loginInscription=document.getElementById('loginInscription');
const loginInscriptionError=document.getElementById('loginInscriptionError');
const passwordInscription=document.getElementById('passwordInscription');
const passwordInscriptionError=document.getElementById('passwordInscriptionError');
const confirmePassword=document.getElementById('confirmePassword');
const confirmePasswordError=document.getElementById('confirmePasswordError');
const photoInscription=document.getElementById('photoInscription')

formInscription.addEventListener('submit',function(e){
    if (prenomInscription.value ==='') {
        prenomInscription.style.border="red 2px solid"
        prenomInscriptionError.innerText='Ce champ est obligatoire';
        e.preventDefault(); 
    }
    if (nomInscription.value ==='') {
        nomInscription.style.border="red 2px solid"
        nomInscriptionError.innerText='Ce champ est obligatoire';
        e.preventDefault(); 
    }
    if (loginInscription.value ==='') {
        loginInscription.style.border="red 2px solid"
        loginInscriptionError.innerText='Ce champ est obligatoire';
        e.preventDefault(); 
    }
    if (passwordInscription.value ==='') {
        passwordInscription.style.border="red 2px solid"
        passwordInscriptionError.innerText='Ce champ est obligatoire';
        e.preventDefault(); 
    }
    if (confirmePassword.value ==='') {
        confirmePassword.style.border="red 2px solid"
        confirmePasswordError.innerText='Ce champ est obligatoire';
        e.preventDefault(); 
    }
    if (passwordInscription.value!="" && (passwordInscription.value.length < 6 || passwordInscription.value.match("/[0-9a-zA-Z]/"))) {
        passwordInscriptionError.innerHTML="password incorect";
        passwordInscription.style.border='red solid 2px';
        e.preventDefault(); 
    }
    if (confirmePassword.value !='' && passwordInscription != confirmePassword) {
        confirmePasswordError.innerHTML="password non identique";
        confirmePassword.style.border='red solid 2px';
        e.preventDefault(); 
    }
    function checkEmail(input) {//Tester si l'email est valide :  javascript : valid email
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
        if (re.test(input.value.trim().toLowerCase())) {
            showSuccess(input);
            // alert('email incorect');
        } else {
            loginInscriptionError.innerHTML="email incorrect";
            loginInscription.style.border='red solid 2px';
            e.preventDefault();
        }
    }
    if (loginInscription != "") {
        
        checkEmail(loginInscription);
        
    }

})

photoInscription.addEventListener('change',function(){
   const [file] =photoInscription.files;
   if (file) {
    photoInscriptionLabel.src = URL.createObjectURL(file)
       
   }
})

