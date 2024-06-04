<?php
    require_once('../template/header.php');

    require_once('config/connexionBD.php');
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        try {
           
            // Suppression de l'enregistrement dans la table produit
            $sql = "DELETE FROM nouveaute WHERE id_nouveaute = :id";
            $stmt = $bdd->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            
            echo "le produit a été supprimé de nouveautés.";
            echo " <a href='nouveaute.php'>Revenir à la page principale</a>";
        } catch(PDOException $e) {
            echo "Erreur lors de la suppression : " . $e->getMessage();
        }
    }
?>