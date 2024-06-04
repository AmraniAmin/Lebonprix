<?php
    require_once('../assets/php/constants.php');
    require_once('../assets/php/functions.php');
    require_once('../assets/php/db.php');
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title> LebonPrix - Administration</title>
        <meta name="description" content="Administration du site agence immo" />
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../assets/css/styles.css" />
    </head>

    <body>

        <div class="container">

            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="SeConnecter.php">
                            <span class="glyphicon glyphicon-lock"></span>
                            ADMINISTRATION - LebonPrix Sonzay
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="<?php echo strpos($_SERVER['SCRIPT_FILENAME'], '/admin/etablissements/') ? 'active' : ''; ?>">
                                <a href="./list_Produits.php">Produit</a>
                            </li>
                            <li class="<?php echo strpos($_SERVER['SCRIPT_FILENAME'], '/admin/types/') ? 'active' : ''; ?>">
                                <a href="./promotion.php">Promotion</a>
                            </li>
                            <li class="<?php echo strpos($_SERVER['SCRIPT_FILENAME'], '/admin/types/') ? 'active' : ''; ?>">
                                <a href="./nouveaute.php">Nouveauté</a>
                            </li>
                    	</ul>
                    </div>
                </div>
            </div>

            <div class="row">

                <section class="col-xs-12">