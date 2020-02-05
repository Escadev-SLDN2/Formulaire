<?php
// Création des variables qui contiendront les identifiants de connexion
$user = 'root';
$pass = '';

try {

    // Connexion à la BDD
    $dbh = new PDO('mysql:host=localhost:8889;dbname=formulaire', $user, $pass);
    
    // Création d'un user (facultatif)
    //$dbh->query('INSERT INTO users(name, email) VALUES("Sophie Dupont &hearts;", "sophie@dupont.com")');

    // Affichage de la liste des users

    foreach($dbh->query('SELECT * from users', PDO::FETCH_ASSOC) as $row){
        print_r($row);
    }

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