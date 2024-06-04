<?php

$host_name = "localhost";
$db_name = "basedonneessite";
$user = "root";
$mdp = "";

try {
    $con = new PDO("mysql:host=$host_name;dbname=$db_name", $user, $mdp);
    // Définir le mode d'erreur de PDO sur Exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !";
} catch (Exception $e) {
    die('Erreur de connexion échouée ! ' . $e->getMessage());
}
?>
