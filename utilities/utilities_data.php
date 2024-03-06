<?php

// La fonction pour afficher les informations des Medcins de la table de données //
function findallMedcin($db){


    $sql= 'SELECT * FROM docteur';
    $requete = $db->query($sql);
    $docteur = $requete->fetchAll();

    return $docteur;

}

// La fonction pour afficher les informations des Medicaments de la table de données //
function findallMedicaments($db){

    $sql = 'SELECT * FROM medicaments';
    $requete = $db->query($sql);
    $medicaments = $requete->fetchAll();

    return $medicaments;
}

// La fonction pour afficher les informations des Medicaments de divers pays //
function findAllpaysByid($db, $currentid){

    $sql = "SELECT medicaments.nom  AS names, medicaments.prix AS price, medicaments.img AS picture FROM pays
    INNER JOIN docteur ON docteur.pays_id = pays.id
    JOIN medicaments on medicaments.pays_id = pays.id
    WHERE pays.id =  $currentid";

$requete = $db->query($sql);
$medicamentspays = $requete->fetchAll();
return $medicamentspays;
}


function findAllpays($db){

    $sql = "SELECT medicaments.id AS m_id, medicaments.nom  AS `name`, medicaments.prix AS price, medicaments.img AS picture, pays.pays AS pays_name FROM pays
    INNER JOIN medicaments on medicaments.pays_id = pays.id";
    

$requete = $db->query($sql);
$medicamentspays = $requete->fetchAll();
return $medicamentspays;
}



function findAllmedicamentByid($db, $currentid){

    $sql = "SELECT medicaments.id AS m_id, medicaments.nom  AS `name`, medicaments.prix AS price, medicaments.img AS picture, pays.pays AS pays_name FROM pays
    JOIN medicaments on medicaments.pays_id = pays.id
    WHERE medicaments.id =  $currentid";

$requete = $db->query($sql);
$medicaments_id = $requete->fetch();
return $medicaments_id;
}
