<?php
    $dbhost = 'localhost';
    $dbname = 'certificat';
    $dbuser = 'root';
    $dbpswd = '';
    try{
        $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
              PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch(PDOexception $e){
        die("Une erreur est survenue lors de la connexion à la base de données");
    }

function e($string){
    if ($string) {
        return  htmlspecialchars(trim($string));
    }
}

function not_empty($fields = []){
    if(count($fields) != 0){
        foreach($fields as $field){
            if(empty($_POST[$field]) || e($_POST[$field]) == ""){
                return false;
            }
        }
        return true;
    }
}