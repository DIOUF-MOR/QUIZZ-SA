<?php

function champ_obligatoire(string $key, string $data, array &$errors, string $message = "Ce champ est obligatoire")
{
    if (empty($data)) {
        $errors[$key] = $message;
    }
}
function valid_email(string $key, string $data, array &$errors, string $message = "email invalid")
{


    if (!preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $data)) {
        //Email address is invalid.
        $errors[$key] = $message;
    }
}
function valid_password(string $key, string $data, array &$errors, string $message = "password incorect")
{
    if (!preg_match('/[a-zA-Z]/', $data) || !preg_match("/[0-9]/", $data) || $data < 6) {

        $errors[$key] = $message;
    }
}
function valide_user_name(string $key, string $data, array &$errors, string $message = "Name incorect")
{

    if (!preg_match('@[A-Za-z]@', $data)) {
        
        $errors[$key] = $message;

    }
}
