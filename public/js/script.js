// alert("oui")
const formConnection=document.getElementById("formConnection")
const loginConnection=document.getElementById("loginConnection")
const passwordConnection=document.getElementById("passwordConnection")
const loginError=document.getElementById('loginError');
const passwordError=document.getElementById('passwordError');

formConnection.addEventListener('submit',function(e){

    if(loginConnection.value===""){
        loginError.innerHTML="champ obligatoire";
        loginConnection.style.border='red solid 2px';
        e.preventDefault(); 
    }
    
    if(passwordConnection.value===""){
        passwordError.innerHTML="champ obligatoire";
        passwordConnection.style.border='red solid 2px';
        e.preventDefault(); 
    }
    if (passwordConnection.value!="" && (passwordConnection.value.length < 6 || passwordConnection.value.match("/[0-9a-zA-Z]/"))) {
        passwordError.innerHTML="password incorect";
        passwordConnection.style.border='red solid 2px';
        e.preventDefault(); 
    }

    function checkEmail(input) {//Tester si l'email est valide :  javascript : valid email
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
        if (re.test(input.value.trim().toLowerCase())) {
            showSuccess(input);
            alert('email incorect');
        } else {
            loginError.innerHTML="email incorrect";
            loginConnection.style.border='red solid 2px';
            e.preventDefault();
        }
    }

    if (loginConnection !="") {
        
        checkEmail(loginConnection);
        
    }
})