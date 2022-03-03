<?php

function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"){
if(empty($data)){
$errors[$key]=$message;
}
}
function valid_email(string $key,string $data,array &$errors,string $message="email invalid"){
        
        if (preg_match('/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g',$data)) {
            
            $errors[$key]=$message;
            
        }
}
function valid_password(string $key,string $data,array &$errors,string $message="password incorect"){
    if (!preg_match('/[a-zA-Z]/',$data) || !preg_match("/[0-9]/",$data) || $data < 6 ){
        
        $errors[$key]=$message;
        
    }
}

