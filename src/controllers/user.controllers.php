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

                pagination();
            } elseif (is_joueur()) {
                jeu();
            }
        } elseif ($_REQUEST['action'] == "lister_joueur") {

            if (is_admin()) {

                pagination();
            } elseif (is_joueur()) {
                jeu();
            }
        } elseif ($_REQUEST['action'] == "creerAdmin") {
            if (is_admin()) {

                creer_admin();
            } elseif (is_joueur()) {

                jeu();
            }
        }elseif ($_REQUEST['action'] == "creerQuestion") {
            if (is_admin()) {

                creer_question();
                
            } elseif (is_joueur()) {

                jeu();
            }
        }
    } else {
        header('location:' . WEB_ROOT);
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
function pagination()
{
    $data = find_users(ROLE_JOUEUR);
    (isset($_GET['page'])) ? $page = ($_GET['page']) : $page = 1;
    $nbrJoueurParPage = 10;
    $nbreDePage = ceil(count($data) / $nbrJoueurParPage);
    ($page > $nbreDePage) ? $page = $nbreDePage : $page;
    $debut = ($page - 1) * $nbrJoueurParPage;
    $fin = ($page * $nbrJoueurParPage - 1);
    ($fin > count($data))? $fin= count($data)-1 :$fin;
    $tableauJoueurParPage = find_nbre_users($data, $debut, $fin);
    ob_start();
    require_once(PATH_VIEWS . "user/liste.joueur.html.php");
    $content_for_views = ob_get_clean();
    require_once(PATH_VIEWS . "user/accueil.html.php");
}

function creer_question()
{
    ob_start();
    $data = find_users(ROLE_JOUEUR);
    require_once(PATH_VIEWS . "user/creerQuestion.html.php");
    $content_for_views = ob_get_clean();
    require_once(PATH_VIEWS . "user/accueil.html.php");

    // return $data;
}
