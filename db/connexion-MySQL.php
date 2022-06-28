<?php

/**
 * Initialisation de la connexion à la base de données
 */
try {
    if ( defined('APP_ENV') ) {
        $db = new PDO('sqlite:' . realpath('../database.db3'));
    } else {
        $db = new PDO('mysql:host=localhost;dbname=hec', 'root', 'root');
        $db->exec("set names utf8");
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>
