<?php
require_once(PATH_SRC . "models/user.model.php");
// require_once(ROOT."config".DIRECTORY_SEPARATOR."role.php" );

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if (isset($_REQUEST['action'])) {
        if (!is_connect()) {
            header('location:' . WEB_ROOT);
            exit();
        }

        if ($_REQUEST['action'] == "accueil") {

            // require_once(PATH_VIEWS . "user/accueil.html.php");

            if (is_admin()) {

                lister_joueur();

            }elseif(is_joueur()){
                jeu();
            }

        }elseif($_REQUEST['action'] == "lister_joueur") {
           
            if (is_admin()) {

                lister_joueur();

            }elseif(is_joueur()){
                jeu();
            }

        }elseif($_REQUEST['action'] == "creerAdmin") {
            if (is_admin()) {

                creer_admin();

            }elseif(is_joueur()){
                
                jeu();
            }
           
        }
        
    } else{
        header('location:' .WEB_ROOT);
        exit();
    }
}

function lister_joueur()
{
    ob_start();
    $data = find_users(ROLE_JOUEUR);
    require_once(PATH_VIEWS . "user/liste.joueur.html.php");
    $content_for_views = ob_get_clean();
    require_once(PATH_VIEWS . "user/accueil.html.php");

    // return $data;
}
function jeu()
{
    ob_start();
    require_once(PATH_VIEWS . "user/jeu.html.php");
    $content_for_views = ob_get_clean();
    require_once(PATH_VIEWS . "user/accueil.html.php");

    // return $data;
}

function creer_admin()
{
    ob_start();
    require_once(PATH_VIEWS . "user/creerAdmin.html.php");
    $content_for_views = ob_get_clean();
    require_once(PATH_VIEWS . "user/accueil.html.php");

    // return $data;
}

