<?php
// Affichage des erreurs détaillées :
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Récupération des données de connexion
require_once('db_user.php');

try {

    // Connexion à la BDD
    $dbh = new PDO($host, $user, $pass);
    
    // Création d'un user (facultatif)
    //$dbh->query('INSERT INTO users(name, email) VALUES("Sophie Dupont &hearts;", "sophie@dupont.com")');

    // Affichage de la liste des users

    foreach($dbh->query('SELECT * from users', PDO::FETCH_ASSOC) as $row){
        print_r($row);
    }

    echo 'Traitement terminé, tout est OK.';

    // Fermeture de la connexion
     $dbh = null;

    } 
    
    catch (PDOException $e) {

    // Affiche un message en cas d'erreur
    print "Erreur !: " . $e->getMessage() . "<br />";
    
    // Stoppe l'exécution du script PHP
    die();
}

?>