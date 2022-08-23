<?php

function CreateCertifica($name_men,$name_wom,$date_men,$date_wom,$lieu_wom,$lieu_men,$witnesses_1,$witnesses_2,$bourgmestre){
    global $db;
    $num_cert = codeSubscription();

    $p = [
        'num_cert' => $num_cert,
        'name_men'     =>  $name_men,
        'name_wom'   =>  $name_wom,
        'date_men'   =>  $date_men,
        'date_wom'   =>  $date_wom,
        'lieu_wom'   =>  $lieu_wom,
        'lieu_men'   =>  $lieu_men,
        'witnesses_1'   =>  $witnesses_1,
        'witnesses_2'   =>  $witnesses_2,
        'bourgmestre'   =>  $bourgmestre
    ];

    $sql = "
        INSERT INTO 
              certificats(num_cert,name_men,name_wom,date_men,date_wom,lieu_men,lieu_wom,witnesses_1,witnesses_2,bourgmestre,weddingdate)
        VALUES(:num_cert,:name_men,:name_wom,:date_men,:date_wom,:lieu_men,:lieu_wom,:witnesses_1,:witnesses_2,:bourgmestre,NOW())
    ";
    
    $req = $db->prepare($sql);
    $req->execute($p);
}

function codeSubscription() 
{
		//Numéro du cerficat
	  $x = uniqid('DRC_EECM_');
	  $codeSous = $x;
	   
	  return strtoupper($codeSous);
} 