<?php
function json_to_array(string $key):array{
$dataJson=file_get_contents(PATH_DB);
$data=json_decode($dataJson,true);
return $data[$key];
}
//Enregistrement et Mis a jour des donnees du fichier
function array_to_json(string $key,array $user):bool{

    $dataJson = file_get_contents(PATH_DB);
    $data = json_decode($dataJson,true);

    $data["users"][] = $user;
    $dataJson = json_encode($data,JSON_PRETTY_PRINT);
    return file_put_contents(PATH_DB,$dataJson);
}