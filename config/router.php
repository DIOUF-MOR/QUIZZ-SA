<?php

// var_dump($_REQUEST);die;

if(isset($_REQUEST['controller']) ){
    switch ($_REQUEST['controller']) {
        case "securite" :
        require_once(PATH_SRC."controllers/securite.controllers.php");
        break;
        case "user" :
        require_once(PATH_SRC."controllers/user.controllers.php");
        break;
        case "errors" :
        require_once(PATH_SRC."controllers/error.controllers.php");
        
            echo "cette clé n'existe pas";die;
    }
}else{
    require_once(PATH_SRC."controllers/securite.controllers.php");
}