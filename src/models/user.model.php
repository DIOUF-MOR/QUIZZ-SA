<?php


function find_user_login_password(string $login,string $password):array{
    $users=json_to_array("users");
    foreach ($users as $user) {
        if( $user['login']==$login && $user['password']==$password){
            return $user;
        } 
    }
    return [];
}

function find_users(string $role):array{
    $users=json_to_array("users");
    $result=[];
    foreach ($users as $user) {
        if( $user['role']==$role)
        $result[]= $user;
    }
    return $result;
}

function addUser($nom, $prenom, $login, $password,$role){
 
    $user = array(
        "prenom"=>$prenom,
        "nom"=>$nom,
        "login"=>$login,
        "password"=>$password,
        "role"=>$role,
        "score"=>0
    );

        return(array_to_json("users",$user));

}