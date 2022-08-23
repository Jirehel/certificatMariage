<?php

function certificats()
{
    global $db;
    $req = $db->query("SELECT * FROM certificats ORDER BY weddingdate DESC");
    $results = array();
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}