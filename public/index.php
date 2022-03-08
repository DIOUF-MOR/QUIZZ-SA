<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
//Demarrage de la sesion
if(session_status()==PHP_SESSION_NONE){
session_start();
}
//inclusion des constantes
 require_once dirname(dirname(__FILE__))."/config/constantes.php";

//
//inclusion des roles
require_once dirname(dirname(__FILE__))."/config/orm.php";
//inclusion du Validator
require_once dirname(dirname(__FILE__))."/config/role.php";

require_once dirname(dirname(__FILE__))."/config/validator.php";

if(isset($_SESSION['errors'])){
    $errors=$_SESSION['errors'];
    
    unset($_SESSION['errors']);
}

require_once PATH_VIEWS . DIRECTORY_SEPARATOR . "include" . DIRECTORY_SEPARATOR . "header.html.php";

//Chargement du router
require_once dirname(dirname(__FILE__))."/config/router.php";

require_once PATH_VIEWS . DIRECTORY_SEPARATOR . "include" . DIRECTORY_SEPARATOR . "footer.html.php";
