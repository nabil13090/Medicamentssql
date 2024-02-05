<?php require_once dirname(__DIR__ ) . "/config/config.php";
// LA connexion a la base données //
function getPDOlink($config){

    $dsn = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['dbhost'] . ';port=' . $config['dbport'];

    // On tenter de se connecter à la base de données :
    try {
  
      // On instancie l'objet PDO :
      $db = new PDO($dsn, $config['dbuser'], $config['dbpass']);
  
      // On envoi nos requetes en utf8 :
      $db->exec("SET NAMES utf8");
  
      // On definit le mode de fetch par defaut :
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

      return $db;
  
    } catch (PDOException $e) {
      exit('BDD Erreur de connexion : ' . $e->getMessage());
    }
}



