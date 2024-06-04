<?php
require_once('../template/header.php');
session_start();

require_once('config/connexionBD.php');

if (!isset($_SESSION['utilisateur_connecte']) || $_SESSION['utilisateur_connecte'] == false) {
    header("Location: index.php");
    exit();
}

$sql = "SELECT * FROM produit";
$result = $bdd->query($sql);
$produits = $result->fetchAll(PDO::FETCH_OBJ);
?>

<h1>
    <span class="glyphicon glyphicon-th"></span>
    Liste des Produits
</h1>

<div class="list-actions clearfix" style="margin: 0px 0px 30px 0px;">
    <a href="form_insert.php" class="btn btn-success" style="float:right;">
        <span class="glyphicon glyphicon-plus"></span>
        Ajouter un Produit
    </a>
</div>

<table class="table table-bordered">
    <tr>
        <th>Nom du produit</th>
        <th>Quantité</th>
        <th>Description</th>
        <th>Prix sans TVA</th>
        <th>Taux de TVA</th>
        <th>Prix final</th>
        <th>Ingrédients</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    <?php foreach ($produits as $p): ?>
    <tr>
        <td><?= $p->nom_produit ?></td>
        <td><?= $p->quantite ?></td>
        <td><?= $p->description ?></td>
        <td><?= $p->prix_sans_tva ?></td>
        <td><?= $p->taux_tva ?></td>
        <td><?= $p->prix ?></td>
        <td><?= $p->ingredients ?></td>
        <td><img src="<?= $p->image ?>" /></td>
        <td class="actions">
            <a href="form_update.php?id=<?= $p->id ?>" class="btn btn-primary">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
            &nbsp;&nbsp;
            <a href="delete.php?id=<?= $p->id ?>" class="btn btn-primary" onclick="return confirm('Supprimer définitivement ce produit ?');">
                <span class="glyphicon glyphicon-trash"></span>
            </a>
            &nbsp;&nbsp;
            <a href="promotion_insert.php?id=<?= $p->id ?>" class="btn btn-info" onclick="return confirm('Vous voulez rajouter ce produit en promotion ?');">
                <span class="glyphicon glyphicon-star"></span>
            </a>
            &nbsp;&nbsp;
            <a href="nouveaute_insert.php?id=<?= $p->id ?>" class="btn btn-info" onclick="return confirm('Vous voulez mettre ce produit comme nouveauté ?');">
                <span class="glyphicon glyphicon-bullhorn"></span>
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<style>
    img {
        width: 60px;
        height: 60px;
    }
</style>

<?php
require_once('../template/footer.php');
?>
