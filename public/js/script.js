// alert("oui")
const formConnection=document.getElementById("formConnection")
// console.log(formConnection);
const loginConnection=document.getElementById("loginConnection")
const passwordConnection=document.getElementById("passwordConnection")
const loginError=document.getElementById('loginError');
const passwordError=document.getElementById('passwordError');

formConnection.addEventListener('submit',function(e){

    if(loginConnection.value===""){
        // alert('champ obligatoire');
        loginError.innerHTML="champ obligatoire";
        e.preventDefault(); 
    }
    
    if(passwordConnection.value===""){
        // alert('champ obligatoire');
        passwordError.innerHTML="champ obligatoire";
        e.preventDefault(); 
    }
    if (passwordConnection.value!="" && (passwordConnection.value.length < 6 || passwordConnection.value.match("/[0-9a-zA-Z]/"))) {
        passwordError.innerHTML="password incorect";
        e.preventDefault(); 
    }
    function checkEmail(input) {//Tester si l'email est valide :  javascript : valid email
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
        if (re.test(input.value.trim().toLowerCase())) {
            showSuccess(input);
            // alert('email incorect');

        } else {
            // showError(input,`Email is not valid!`);
            loginError.innerHTML="email incorrect";

            e.preventDefault();
        }
    }
    checkEmail(loginConnection);
})