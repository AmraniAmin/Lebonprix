<?php
    require_once('../template/header.php');

    require_once('config/connexionBD.php');
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        try {
            // Suppression de l'enregistrement dans la table promotion
            $sql = "DELETE FROM promotion WHERE id_produit = :id";
            $stmt = $bdd->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            
            // Suppression de l'enregistrement dans la table produit
            $sql = "DELETE FROM produit WHERE id = :id";
            $stmt = $bdd->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            
            echo "L'élément a été supprimé.";
            echo " <a href='list_Produits.php'>Revenir à la page principale</a>";
        } catch(PDOException $e) {
            echo "Erreur lors de la suppression : " . $e->getMessage();
        }
    }
?>
