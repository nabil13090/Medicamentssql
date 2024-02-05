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