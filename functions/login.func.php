<?php

function is_admin($email,$password)
{
    global $db;
    $password = sha1($password);
    $sql = "SELECT * FROM admin WHERE user_id=:email AND password=:password";
    $q = $db->prepare($sql);
    $q->execute([
        'email' => $email,
        'password' => $password
    ]);
    return $q->rowCount();
}

//Récuperer les informations de l'admin

function get_admin_info($email){
    global $db;
    $q = $db->prepare("SELECT*FROM admin
                       WHERE  user_id = :email");
        $q->execute([
            'email' => $email
        ]);
        return $q->fetch(PDO::FETCH_OBJ);
}