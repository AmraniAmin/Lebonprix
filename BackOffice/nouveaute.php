<?php
    require_once('../template/header.php');
    session_start();
    
    require_once('config/connexionBD.php');
    $sql = "SELECT nouveaute.*, produit.nom_produit 
            FROM nouveaute 
            INNER JOIN produit ON nouveaute.id_produit = produit.id";
    $result = $bdd->query($sql);
    $nouveautes = $result->fetchAll(PDO::FETCH_OBJ);
?>

<h1>
    <span class="glyphicon glyphicon-th"></span>
    Nouveautés
</h1>



<table class="table table-bordered">
    <tr>
        <th>Produit</th>
        <th>Date de début</th>
        <th>Date de fin</th>
        <th>Actions</th> <!-- Added a column for actions -->
    </tr>

    <?php
    foreach ($nouveautes as $n) {
        echo "
        <tr>
            <td>$n->nom_produit</td>
            <td>$n->date_debut</td>
            <td>$n->date_fin</td>
            <td class='actions'>
                <a href='nouveaute_update.php?id=$n->id_nouveaute' class='btn btn-primary'>
                    <span class='glyphicon glyphicon-pencil'></span>
                </a>
                &nbsp;&nbsp;
                <a href='nouveaute_delete.php?id=$n->id_nouveaute' class='btn btn-primary' onclick=\"return confirm('Supprimer définitivement ce produit des nouveautés ?');\">
                    <span class='glyphicon glyphicon-trash'></span>
                </a>
            </td>
        </tr>
        ";
    }
    ?>
</table>
