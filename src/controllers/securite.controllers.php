<?php

/**
 * Traitement des Requetes
POST
 */

require_once(PATH_SRC . "models/user.model.php");

// var_dump($_REQUEST['action']);die;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] == "connexion") {
            $login = $_REQUEST['loginConnection'];
            $passwordConnection = $_REQUEST['passwordConnection'];
            //    var_dump($login, $passwordConnection);die;
            connexion($login, $passwordConnection);
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] == "inscription") {

            $prenom = $_REQUEST['prenom'];
            $nom = $_REQUEST['nom'];
            $loginInscription = $_REQUEST['loginInscription'];
            $passwordInscription = $_REQUEST['passwordInscription'];
            $confirmePassword = $_REQUEST['confirmePassword'];

            //    var_dump($login, $passwordConnection);die;
            inscription($prenom, $nom, $loginInscription, $passwordInscription, $confirmePassword);
        }
    }
}
/**
 * Traitement des Requetes GET
 */
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_REQUEST['action'])) {
        if (!is_connect() && $_REQUEST['action'] != "inscription") {
            header('location:' . WEB_ROOT);
            exit();
        }
        if ($_REQUEST['action'] == "inscription") {
            require_once(PATH_VIEWS . "securite" . DIRECTORY_SEPARATOR . "inscription.html.php");
        } elseif ($_REQUEST['action'] == "connexion") {

            require_once(PATH_VIEWS . "securite" . DIRECTORY_SEPARATOR . "connexion.html.php");
            
        } elseif ($_REQUEST['action'] == "deconnexion") {

            logout();
        }elseif ($_REQUEST['action'] == "liste_joueur") {
            pagination();
        }
        //echo "okkjh"; die;

    } else {

        require_once ROOT . "templates" . DIRECTORY_SEPARATOR . "securite" . DIRECTORY_SEPARATOR . "connexion.html.php";
    }
}


function inscription(string $prenom, string $nom, string $loginInscription, string $passwordInscription, string $confirmePassword): void
{
    $errors = [];
    champ_obligatoire("prenom", $prenom, $errors);
    if (!isset($errors['prenom'])) {
        valide_user_name("prenom", $prenom, $errors);
    }
    champ_obligatoire("nom", $nom, $errors);
    if (!isset($errors['nom'])) {
        valide_user_name("nom", $nom, $errors);
    }
    champ_obligatoire("loginInscription", $loginInscription, $errors);
    if (!isset($errors['loginInscription'])) {
        valid_email("loginInscription", $loginInscription, $errors);
    }
    champ_obligatoire("passwordInscription", $passwordInscription, $errors);
    if (!isset($errors['passwordInscription'])) {
        valid_password("passwordInscription", $passwordInscription, $errors);
    }
    champ_obligatoire("confirmePassword", $confirmePassword, $errors);
    if (!isset($errors['confirmePassword'])) {
        valid_password("confirmePassword", $confirmePassword, $errors);
    }

    //var_dump($errors);die;
    // die('ok');
    if (count($errors) == 0) {
        if (is_connect()) {
            $role = ROLE_ADMIN;
        } else {
            $role = ROLE_JOUEUR;
        }
        //var_dump($role);die;
        if (addUser($nom, $prenom, $loginInscription, $passwordInscription, $role)) {
            $_SESSION['success']="Compte ouverte avec succés";
            header("location:" . WEB_ROOT."?controller=securite&action=inscription");
        } else {
            echo "Erreur!!!";
        }
    } else {

        
        $_SESSION['errors'] = $errors;
        require_once(PATH_VIEWS . "securite" . DIRECTORY_SEPARATOR . "inscription.html.php");
        exit();
    }
}

function connexion(string $login, string $passwordConnection): void
{
    $errors = [];
    champ_obligatoire("loginConnection", $login, $errors);
    if (!isset($errors['loginConnection'])) {
        valid_email("loginConnection", $login, $errors);
    }
    champ_obligatoire("passwordConnection", $passwordConnection, $errors);
    if (!isset($errors['passwordConnection'])) {
        valid_password("passwordConnection", $passwordConnection, $errors);
    }
    // die('ok');
    if (count($errors) == 0) {
        $userConnect = find_user_login_password($login, $passwordConnection);
        // var_dump($userConnect);die;
        if (count($userConnect) != 0) {
            $_SESSION[USER_KEY] = $userConnect;

            header("location:" . WEB_ROOT . "public/?controller=user&action=accueil");
            exit();
        } else {
            $errors['connexion'] = "Login ou Mot de passe incorrect";
            $_SESSION[KEY_ERRORS] = $errors;
            header("location:" . WEB_ROOT);
            exit();
        }
    } else {
        $_SESSION[KEY_ERRORS] = $errors;
        header("location:" . WEB_ROOT);
        exit();
    }
}


function logout(): void
{
    $_SESSION['user_connect'] = array();
    unset($_SESSION['user_connect']);

    session_destroy();
    session_unset();
    header("location:" . WEB_ROOT);
    exit();
}
