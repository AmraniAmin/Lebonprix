<?php
require_once '../BD/config.php';

if ($con) {

    $sql = ("SELECT id, nom_produit, image, prix 
  FROM produit Where categorie_id=44");
    $results = $con->query($sql);
    $pate = $results->fetchAll(PDO::FETCH_OBJ);
} else {
    // Handle connection error if necessary
    echo "Connection to the database failed.";
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/lien.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container-condition {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: red;
            font-size: 2.5rem;
        }

        .content {
            margin-top: 20px;
        }

        h3 {
            margin-top: 15px;
        }

        p {
            line-height: 1.5;
        }
    </style>
    <title>Lebonprix</title>
</head>

<body class="">
    <div class="container">
        <header>
            <!-- menu de navigation logo & Compte utilisateur et panier à droite -->
            <nav>
                <div class="logo">
                    <img class="logolebonprix" src="../images/logolebonprix.jpg" alt="">
                </div>
                <div class="menu-user">
                    <ul class="menu-user">
                        <li class="menu-user-item">
                            <div class="user-icon">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                </svg>
                            </div>
                        </li>
                        <li class="menu-user-item">
                            <div class="cart-icon">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                                </svg>
                                <span>0</span>
                            </div>
                        </li>
                        <li class="menu-user-item">
                            <div class="secure-icon">
                                <img class="logopaiement" src="../images/paiement.jpg" alt="">
                            </div>
                        </li>
                    </ul>
                </div>

            </nav>
            <!-- menu de navigation Barre de recherche au milieu -->
            <nav class="navbar navbar-expand-lg navbar-light d-flex flex-column  align-items-center" style="background: #ececeb">
                <div class="container  col-md-4 navbar-expand-lg">
                    <form class="navbar-brand mx-auto">
                        <div class="input-group search-bar ">
                            <button class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                            <input type="text" class="search-bar form-control" placeholder="Recherche" aria-label="Recherche">
                        </div>
                    </form>
                </div>
            </nav>
            <!-- menu de navigation Menu item Accueil, Epicerie Fine ... -->
            <nav class="nav-menu deuxieme">
                <div class="menu">
                    <a href="#" id="hamburger-icon" class="mobile-toggler"><i class="fas fa-bars"></i></a>
                    <ul class="main-menu">
                        <li class="menu-item"><a href="../index.php" class="active">Accueil</a></li>

                        <!-- menu epicerie  -->
                        <li class="menu-item mega-menu-cave">
                            <a href="../lien/epiceriesucre.php">Epicerie Fine</a>
                            <div class="mega-menu-wrapper slideInUp">
                                <div class="mega-menu-col">
                                    <a href="../lien/epiceriesucre.php">
                                        <h5> Epicerie sucrée</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/epiceriesucre.php">Pâtes à tartiner, confitures et miels</a></li>
                                        <li><a href="../lien/epiceriesucre.php">Biscuits et gâteaux </a></li>
                                        <li><a href="../lien/epiceriesucre.php">Desserts </a></li>
                                        <li><a href="../lien/epiceriesucre.php">Sucres et farines</a></li>
                                        <li><a href="../lien/epiceriesucre.php">Chocolats et confiserie</a></li>
                                        <li><a href="../lien/epiceriesucre.php">Fruits secs et fruits séchés</a></li>
                                        <li><a href="../lien/epiceriesucre.php#cafethe">Café, thé et boissons chaudes</a></li>
                                        <li><a href="../lien/epiceriesucre.php">Céréales petit-déjeuner</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">

                                    <a href="../lien/Epiceriesalee.php">
                                        <h5> Epicerie salée</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/Epiceriesalee.php#fruitsSecs">Fruits Secs et Apéritifs</a></li>
                                        <li><a href="../lien/Epiceriesalee.php#">Pâtes, riz, graines et céréales </a></li>
                                        <li><a href="../lien/Epiceriesalee.php#">Conserves et bocaux</a></li>
                                        <li><a href="../lien/Epiceriesalee.php#">Plats cuisinés et soupes : </a></li>
                                        <li><a href="../lien/Epiceriesalee.php#">Huiles et vinaigres </a></li>
                                        <li><a href="../lien/Epiceriesalee.php#">Sauces et Condiments </a></li>
                                    </ul>
                                </div>

                            </div>
                        </li>

                        <!-- menu  cave -->
                        <li class="menu-item mega-menu-cave ">
                            <a href="#">Cave</a>
                            <div class="mega-menu-wrapper slideInUp">
                                <div class="mega-menu-col">
                                    <a href="../lien/caveChampagnes.php">
                                        <h5> Champagnes</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/caveChampagnes.php#">Bruts</a></li>
                                        <li><a href="../lien/caveChampagnes.php#"> Rosés</a></li>
                                        <li><a href="../lien/caveChampagnes.php#">Blanc de Blancs</a></li>
                                        <li><a href="../lien/caveChampagnes.php#">Millésimés</a></li>
                                        <li><a href="../lien/caveChampagnes.php#">Grandes cuvées de Vignerons</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <a href="../lien/caveVins.php">
                                        <h5> Vins</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/caveVins.php#">Nos coups de cœur 1ere grand cru</a></li>
                                        <li><a href="../lien/caveVins.php#">Touraine</a></li>
                                        <li><a href="../lien/caveVins.php#">Bordeaux</a></li>
                                        <li><a href="../lien/caveVins.php#">Bourgogne</a></li>
                                        <li><a href="../lien/caveVins.php#">Vallée du Rhone</a></li>
                                        <li><a href="../lien/caveVins.php#">Vallée de la Loire</a></li>
                                        <li><a href="../lien/caveVins.php#">Provence</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <a href="../lien/caveBieres.php">
                                        <h5> Bières</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/caveBieres.php#">Bières IPA</a></li>
                                        <li><a href="../lien/caveBieres.php#">Blondes</a></li>
                                        <li><a href="../lien/caveBieres.php#">Blanches</a></li>
                                        <li><a href="../lien/caveBieres.php#">Brunes</a></li>
                                        <li><a href="../lien/caveBieres.php#">AmbréesRousses</a></li>
                                        <li><a href="../lien/caveBieres.php#">Ambrées</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <a href="../lien/caveCidres.php">
                                        <h5> Cidres et poirés</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/caveCidres.php#">Cidre rosé</a></li>
                                        <li><a href="../lien/caveCidres.php#">Bio</a></li>
                                        <li><a href="../lien/caveCidres.php#">Brut </a></li>
                                        <li><a href="../lien/caveCidres.php#">Artisanal</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <a href="../lien/caveLimonades.php">
                                        <h5> Eaux et Limonades</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/caveLimonades.php#">Artisanale </a></li>
                                        <li><a href="../lien/caveLimonades.php#">French Tonic Boisson au CBD </a></li>
                                        <li><a href="../lien/caveLimonades.php#">Boisson au CBD </a></li>
                                        <li><a href="../lien/caveLimonades.php#">Autres</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <a href="../lien/caveSansAlcool.php">
                                        <h5> Sans alcool</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/caveSansAlcool.php#">Vin Blanc </a></li>
                                        <li><a href="../lien/caveSansAlcool.php#">Rosé </a></li>
                                        <li><a href="../lien/caveSansAlcool.php#">Bulles de Luxe </a></li>
                                        <li><a href="../lien/caveSansAlcool.php#">Spiritueux </a></li>
                                        <li><a href="../lien/caveSansAlcool.php#">Autres</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <a href="../lien/caveJusSirops.php">
                                        <h5> Jus et sirops</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/caveJusSirops.php#">Artisanal Jus d'abricot </a></li>
                                        <li><a href="../lien/caveJusSirops.php#">Raisin </a></li>
                                        <li><a href="../lien/caveJusSirops.php#">Betterave </a></li>
                                        <li><a href="../lien/caveJusSirops.php#">Yuzu </a></li>
                                        <li><a href="../lien/caveJusSirops.php#">Mandarine</a></li>
                                        <li><a href="../lien/caveJusSirops.php#">Nectars de Poire</a></li>
                                        <li><a href="../lien/caveJusSirops.php#">Banane </a></li>
                                        <li><a href="../lien/caveJusSirops.php#">Autres</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <a href="../lien/caveAutres.php">
                                        <h5>Autres</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/caveAutres.php#">Découvrir ICI </a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- menu Bio -->
                        <li class="menu-item dropdown">
                            <a href="../lien/Bio.php#">Bio</a>
                            <div class="sub-menu-wrapper slideInUp">
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="../lien/Bio.php#">Bio 1</a></li>
                                    <li class="menu-item"><a href="../lien/Bio.php#">Bio 1</a></li>
                                    <li class="menu-item"><a href="../lien/Bio.php#">Bio 1</a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- menu Coffret -->
                        <li class="menu-item dropdown">
                            <a href="../lien/Coffret.php#">Coffret</a>
                            <div class="sub-menu-wrapper slideInUp">
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="#">Les Gourmandises</a></li>
                                    <li class="menu-item"><a href="#">Boite carton</a></li>
                                    <li class="menu-item"><a href="#">Editions limitées de Noël</a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- menu Merveille du Monde -->
                        <li class="menu-item dropdown">
                            <a href="../lien/merveilleMonde.php">Merveille du Monde</a>
                            <div class="sub-menu-wrapper slideInUp">
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 1</a></li>
                                    <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 2</a></li>
                                    <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 2</a></li>
                                    <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 3</a></li>
                                    <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 4</a></li>
                                    <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 5</a></li>
                                    <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 6</a></li>
                                    <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 7</a></li>
                                    <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 8</a></li>
                                    <li class="menu-item"><a href="../lien/merveilleMonde.php#">Merveille 9</a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- menu Viande -->
                        <li class="menu-item mega-menu-cave ">
                            <a href="#">Viande</a>
                            <div class="mega-menu-wrapper slideInUp">
                                <div class="mega-menu-col">
                                    <a href="../lien/viandeTerres.php">
                                        <h5> Viandes terre</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/viandeTerres.php#">Bœuf </a></li>
                                        <li><a href="../lien/viandeTerres.php#"> Agneau </a></li>
                                        <li><a href="../lien/viandeTerres.php#">Autres</a></li>
                                        <li><a href="../lien/viandeTerres.php#">...</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <a href="../lien/viandeBoxAngneux.php">
                                        <h5> Box Agneau Touraine</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/viandeBoxAngneux.php#"> Agneau </a></li>
                                        <li><a href="../lien/viandeBoxAngneux.php#">Traçabilité De la ferme à l'assiette </a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <a href="../lien/viandeMer.php">
                                        <h5> Viande Mer</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/viandeMer.php#">Fruits de Mer, Huîtres et Crustacés </a></li>
                                        <li><a href="../lien/viandeMer.php#">Saumon fumé </a></li>
                                        <li><a href="../lien/viandeMer.php#">Truite fumée</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <a href="../lien/viandePoulets.php">
                                        <h5> Poulet et dinde</h5>
                                    </a>
                                    <ul class="mega-sub-menu">
                                        <li><a href="../lien/viandePoulets.php#">Box Poulet du Sud-Ouest </a></li>
                                        <li><a href="../lien/viandePoulets.php#">Cuisses de poulet 5kg </a></li>
                                        <li><a href="../lien/viandePoulets.php#">Filet de Poulet 5kg </a></li>
                                        <li><a href="../lien/viandePoulets.php#">Pinot de poulet 5kg</a></li>
                                        <li><a href="../lien/viandePoulets.php#">Cuisse de dinde </a></li>
                                        <li><a href="../lien/viandePoulets.php#">Autres </a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>

            </nav>
        </header>

        <main class="main-produits">
            <div class="container-condition">
                <h2>Qui sommes-nous ? </h2>

                <div class="content">
                    <div>
                        <h3>LEBONPRIX, UNE RÉFÉRENCE EN MATIÈRE D’ÉPICERIE FINE </h3>
                        <p>Lebonprix déniche dans chaque région en France et dans le monde les meilleurs produits à déguster et à boire, sélectionnés auprès des producteurs les plus reconnus dans leur profession. A la fois épicerie fine, magasin bio et caviste, Lebonprix répond à toutes les définitions du « manger de la qualité » en mettant l’accent sur le goût et la qualité et le prix des produits. </p>
                        <p>Vous pouvez choisir entre 7000 produits sélectionnés chez plus de 1000 artisans et producteur de qualité. Lebonprix vous livre en France, partout en Europe mais aussi dans plus de 25 pays pour vos cadeaux ou pour les produits introuvables chez vous. </p>
                        <p>Que ce soit pour offrir à vos proches, pour déguster entre amis ou pour surprendre vos invités lors d’une réception, nos produits répondent à toutes les exigences ! </p>
                    </div>

                    <div>
                        <h2>Comment les produits sont-ils sélectionnés ? </h2>
                        <p>Les produits que nous vous proposons font l'objet d'une sélection très rigoureuse qui vous garantit une qualité optimale : </p>
                        <ul>
                            <li>Nous prêtons une attention particulière à la composition des produits et à leur mode de fabrication et de transformation. Nous évitons autant que possible les colorants, arômes et additifs artificiels quand ils sont inutiles et militons pour la préservation de méthodes de fabrication artisanales et sans raccourcis.</li>
                            <li>Nous goûtons tous les produits proposés sur notre épicerie fine. Nous vérifions si la dégustation du produit apporte du plaisir et correspond bien à ce qui est annoncé sur l’étiquette. Parmi plusieurs produits identiques, nous ne retenons que les meilleurs. </li>
                            <li>Nous accordons une forte importance aux qualités humaines de nos producteurs avec qui nous aimons entretenir des relations amicales et régulières. Certains sont même présents depuis la création de notre plateforme.</li>
                        </ul>
                        <p>Pour trouver ces produits, nous sommes constamment à l’affût. Nos voyages sont l’occasion de belles découvertes, mais nous suivons aussi tout ce qui touche à la cuisine (blogs, magazines, radios...). Nous sommes également sollicités chaque jour par de nombreux producteurs dont nous goûtons les produits (dur métier !) même si nous ne pouvons pas répondre positivement à tous. </p>
                        <p>Bien sûr, nous sommes à votre écoute si vous connaissez des produits qui manquent et qui mériteraient d’être ajoutés. N’hésitez pas à nous faire part de vos suggestions. </p>

                    </div>

                    <div>
                        <h2>La transparence sur les produits </h2>
                        <p>Chaque produit proposé sur le site fait l’objet d’une fiche détaillée. En plus d’une présentation du produit accompagnée de conseils d’utilisation, chaque fiche indique la composition détaillée du produit (ingrédients et matières premières) ainsi que toutes les valeurs nutritionnelles (calories, etc.) pour vous aider dans vos choix. </p>
                        <p>Depuis ses débuts et parce qu’ils sont nos partenaires, Lebonprix a fait le choix d’afficher le nom des producteurs qui fabriquent les produits. Vous pouvez en savoir plus que chaque producteur ou marque en cliquant sur son nom depuis chaque fiche produit. </p>

                    </div>


                </div>
            </div>
        </main>
        <!-- pied du page  -->
        <footer>
            <div class="row">
                <div class="col">
                    <img class="logo" src="../images/logolebonprix.jpg">
                    <a href="/lien/lebonprix.php">
                        <h4>Qui sommes-nous ?</h4>
                    </a>
                    <p>Lebonprix déniche dans chaque région en France et dans
                        le monde les meilleurs produits à déguster et à boire,
                        sélectionnés auprès des producteurs les plus reconnus dans
                        leur profession</p>
                    <p><b>L'abus d'alcool est dangereux pour la santé, à consommer avec modération</b></p>
                </div>
                <div class="col">
                    <h4>INFORMATIONS<div class="underline"><span></span></div>
                    </h4>
                    <ul>
                        <li> <a href="../lien/contact.php">Contact</a></li>
                        <li> <a href="../lien/conditionVente.php">Conditions Générales de ventes</a></li>
                        <li> <a href="">Notres enseignes</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Retrouver Nous <div class="underline"><span></span></h4>
                    <div class="social-icons">
                        <i class="fab fa-facebook" href="#facebook"></i>
                        <i class="fab fa-twitter" href="#facebook"></i>
                        <i class="fab fa-tiktok" href="#facebook"></i>
                        <i class="fab fa-instagram" href="#facebook"></i>
                    </div>
                </div>

            </div>
            <hr>
            <p class="copyright"> Lebonprix @2024- All Rights Reserved</p>
        </footer>
    </div>

    <!-- section panier lateral droite -->
    <div class="cartTab">
        <h1>Votre Panier</h1>
        <div class="listCart">
        </div>
        <div class="btn">
            <button class="close">FERMER</button>
            <button class="checkOut">PAYER</button>
        </div>
    </div>

    <!--lien fichier javascript-->
    <script src="../app-panier.js"></script>
    <script src="../js/popupProduits.js"></script>
    <script src="../js/affichageProduits.js"></script>
    <script src="../js/toggle-link.js"></script>
    <!--custom js file link-->
</body>

</html>