<?php
/**
* Traitement des Requetes
POST
*/

require_once(PATH_SRC."models/user.model.php");

// var_dump($_REQUEST['action']);die;
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == "connexion"){
           $login = $_REQUEST['loginConnection'];
           $password = $_REQUEST['password'];
        //    var_dump($login, $password);die;
           connexion($login,$password);
        }
    
    }
}

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == "inscription"){
            $prenom=$_REQUEST['prenom'];
           $nom=$_REQUEST['nom'];
           $loginInscription = $_REQUEST['loginInscription'];
           $passwordInscription = $_REQUEST['passwordInscription'];
           $confirmePassword=$_REQUEST['passwordInscription'];
           
        //    var_dump($login, $password);die;
        inscription($prenom,$nom,$loginInscription,$passwordInscription,$confirmePassword);
        }
    
    }
}
/**
* Traitement des Requetes GET
*/
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_REQUEST['action'])){
        if (!is_connect()) {
            header ('location:'.WEB_ROOT);
            exit();
        }
        if($_REQUEST['action'] == "connexion"){
        
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");

        }elseif ($_REQUEST['action'] == "deconnexion") {
           
            logout();
            
        }

    }else{

    require_once ROOT."templates".DIRECTORY_SEPARATOR."securite".DIRECTORY_SEPARATOR."connexion.html.php";
    }
}


function inscription(string $prenom,string $nom,string $loginInscription,string $passwordInscription,string $confirmePassword):void {
    $errors=[];
    champ_obligatoire("prenom",$prenom,$errors);
    if(!isset($errors['prenom'])){
        valid_email("prenom",$prenom,$errors);
    }
    champ_obligatoire("nom",$nom,$errors);
    if(!isset($errors['nom'])){
        valid_email("nom",$nom,$errors);
    }
    champ_obligatoire("loginInscription",$loginInscription,$errors);
    if(!isset($errors['loginInscription'])){
        valid_email("loginInscription",$loginInscription,$errors);
    }
    champ_obligatoire("passwordInscription",$passwordInscription,$errors);
        if(!isset($errors['passwordInscription'])){
        valid_password("passwordInscription",$passwordInscription,$errors);
        }
        // die('ok');
    if(count($errors)==0){
        $userConnect=find_user_login_password($login,$password);
        // var_dump($userConnect);die;
        if(count($userConnect)!=0){
            $_SESSION[USER_KEY]=$userConnect;
    
            header("location:".WEB_ROOT."public/?controller=user&action=accueil");
            exit();
        }else{
            $errors['connexion']="Login ou Mot de passe incorrect";
            $_SESSION[KEY_ERRORS]=$errors;
            header("location:".WEB_ROOT);
            exit();
        }
    }else{
        $_SESSION['errors']=$errors;
        header("location:".WEB_ROOT);
        exit();
    }
}

function connexion(string $login,string $password):void {
    $errors=[];
    champ_obligatoire("login",$login,$errors);
    if(!isset($errors['login'])){
        valid_email("login",$login,$errors);
    }
    champ_obligatoire("password",$password,$errors);
        if(!isset($errors['password'])){
        valid_password("password",$password,$errors);
        }
        // die('ok');
    if(count($errors)==0){
        $userConnect=find_user_login_password($login,$password);
        // var_dump($userConnect);die;
        if(count($userConnect)!=0){
            $_SESSION[USER_KEY]=$userConnect;
    
            header("location:".WEB_ROOT."public/?controller=user&action=accueil");
            exit();
        }else{
            $errors['connexion']="Login ou Mot de passe incorrect";
            $_SESSION[KEY_ERRORS]=$errors;
            header("location:".WEB_ROOT);
            exit();
        }
    }else{
        $_SESSION['errors']=$errors;
        header("location:".WEB_ROOT);
        exit();
    }
}


 function logout():void{
     $_SESSION['user_connect']=array();
    unset($_SESSION['user_connect']);

    session_destroy();
    // session_unset();
    header("location:".WEB_ROOT);
    exit();
}

if ($_SERVER['REQUEST_METHOD']=="GET") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] == "inscription") {
        
            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");

        }
    }
}