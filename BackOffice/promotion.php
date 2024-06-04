<?php
    require_once('../template/header.php');
    session_start();
    
    require_once('config/connexionBD.php');

    $sql = "SELECT promotion.*, produit.nom_produit 
            FROM promotion 
            INNER JOIN produit ON promotion.id_produit = produit.id";
    $result = $bdd->query($sql);
    $promotions = $result->fetchAll(PDO::FETCH_OBJ);
?>

<h1>
    <span class="glyphicon glyphicon-th"></span>
    Liste des Promotions
</h1>



<table class="table table-bordered">
    <tr>
        <th>Produit</th>
        <th>Pourcentage de réduction</th>
        <th>Date de début</th>
        <th>Date de fin</th>
        <th>Actions</th> <!-- Added a column for actions -->
    </tr>

    <?php
    foreach ($promotions as $p) {
        echo "
        <tr>
            <td>$p->nom_produit</td>
            <td>$p->pourcentage_reduction</td>
            <td>$p->date_debut</td>
            <td>$p->date_fin</td>
            <td class='actions'>
                <a href='promotion_update.php?id=$p->id_promotion' class='btn btn-primary'>
                    <span class='glyphicon glyphicon-pencil'></span>
                </a>
                &nbsp;&nbsp;
                <a href='promotion_delete.php?id=$p->id_promotion' class='btn btn-primary' onclick=\"return confirm('Supprimer définitivement la promotion ?');\">
                    <span class='glyphicon glyphicon-trash'></span>
                </a>
            </td>
        </tr>
        ";
    }
    ?>
</table>
