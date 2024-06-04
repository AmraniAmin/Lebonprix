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
<html lang="en">

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
      max-width: 900px;
      margin: 0 auto;
      padding: 20px;
    }

    h2 {
      text-align: center;
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
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }

    th,
    td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
  <title>Conditions Générales de Vente</title>
</head>

<body class="">
  <div class="container">
    <header>

      <!-- menu de navigation logo & Compte utilisateur et panier à droite -->
      <nav>
        <div class="logo">
          <img class="logolebonprix" src="../images/logolebonprix.jpg" alt="">
        </div>
        <div class="lebonprix">
          <h3>lebonprix drive : en cours</h2>
            <p>epicerie fine de qualité</p>
        </div>

        <ul class="menu-user">
          <li class="menu-user-item">
            <div class="user-icon">
              <a href="../connexion/connexion.php">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                </svg>
              </a>
            </div>
          </li>
          <li class="menu-user-item">
            <div class="cart-icon">
              <a>
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                </svg>
              </a>
              <span>0</span>
            </div>
          </li>
          <li class="menu-user-item">
            <div class="secure-icon">
              <img class="logopaiement" src="../images/paiement.jpg" alt="">
            </div>
          </li>
        </ul>
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
        <h2>Conditions Générales de Vente</h2>

        <div class="content">
          <p>Les présentes Conditions Générales de Vente s'appliquent pour toutes les commandes passées sur le site internet ou dans le magasin Lebonprix et pour les commandes passées par des personnes physiques particulières par téléphone.</p>

          <p>Plus généralement, elles régissent les relations entre Lebonprix et les utilisateurs du site internet.</p>
          <div>
            <h3>Article 1 - Identification de notre société</h3>
            <p>Lebonprix SASU au capital de 100 000 euros</p>
            <p>1 Rue du 11 Novombre 37360 Sonzay</p>
            <p>Mail : Lebonprix37@yahoo.com</p>
            <p>Tel : 0247383722</p>
            <p>SIRET 91131425000018</p>
            <p>SIREN 911314250</p>
            <p>TVA intracommunautaire FR90911314250</p>
            <p>Site Réalisé par l’Université François Rabelais à Tours. Les étudiants de la promotion du Master Compétence Complementaire en Infromatique (CCI) 2023/2024</p>
            <p>Le responsable de la publication et de la rédaction du site est M. Lounnas Nabil, Président de l’entreprise Lebonprix.</p>
          </div>

          <div>
            <h3>Article 2 - Prix</h3>
            <p>Les prix de nos produits sont indiqués sur le site en euros TTC (toutes taxes comprises) hors participation aux frais de traitement et d'expédition.</p>
            <!-- Ajoutez le reste des informations de l'Article 2 ici -->
            <p>Lebonprix se réserve le droit de modifier ses prix à tout moment. Lors d'une commande, les produits seront facturés sur la base des tarifs en vigueur au moment de la validation de la commande. </p>
            <p>Les produits demeurent la propriété de Lebonprix jusqu'au complet paiement du prix. </p>
            <h4>Cas particulier des commandes envoyées hors Union Européenne</h4>
            <p>En cas de commande vers un pays autre que la France métropolitaine vous êtes l'importateur du ou des produits concernés. Pour tous les produits expédiés hors Union européenne et DOMTOM, le prix sera automatiquement calculé hors taxes sur la facture. Des droits de douane ou autres taxes locales, des droits d'importation ou taxes d'état sont susceptibles d'être exigibles. Ces droits et sommes ne relèvent pas du ressort de Lebonprix. Ils seront à votre charge et relèvent de votre entière responsabilité, tant en termes de déclarations que de paiements aux autorités et/organismes compétents de votre pays. Nous vous conseillons de vous renseigner sur ces aspects auprès de vos autorités locales. Il vous appartient également de vous informer auprès des autorités locales des éventuelles limitations d'importation des produits que vous envisagez de commander. </p>
            <h4>Cas particulier des commandes envoyées en Union Européenne</h4>
            <p>Le prix est calculé toutes taxes comprises. Pour les professionnels disposant d'un numéro de TVA intra-communautaire qui souhaiteraient être exonérés de TVA, ils doivent prendre contact au préalable avec les équipes de Lebonprix par mail ou téléphone. La procédure à suivre sera précisée. Les commandes qui seront passées directement sur le site sans contact préalable ne pourront bénéficier de la franchise de TVA même si le client fournit un numéro de TVA intracommunautaire. </p>

          </div>
          <div>
            <h3>Article 3 - Frais de traitement et d'expédition</h3>
            <h4>France métropolitaine</h4>
            <h5>Vous pouvez choisir entre 5 modes de livraison :</h5>
            <ul>
              <li>En Colissimo : livraison vers une adresse de destination en France métropolitaine. Les frais de traitement et d'expédition commencent à 12,50€. Ce forfait inclut la préparation et l'envoi de la commande.</li>
              <li>Livraison dans les points Drive a Sonzay : les frais de livraison sont offerts.</li>
              <li>Livraison express Chronopost : livraison vers une adresse de destination en France métropolitaine. Le coût varie selon le poids de votre colis. Le montant de la livraison est indiqué sur le panier avant passation de la commande.</li>
              <li>La livraison des produits frais est assurée principalement via Chronofresh et éventuellement Chronopost. </li>
              <li>Pour plus d'informations, veuillez contacter notre service clientèle et la page des offres de livraison qui détaille chaque mode de livraison. </li>
            </ul>

            <h4>Union Européenne ou Suisse</h4>
            <p>Les frais de traitement et d'expédition sont calculés en fonction du poids de votre commande et du pays de destination et débutent à 12.50€. Ce forfait inclus la préparation et l'envoi des produits en Colissimo International vers une adresse de destination en Union Européenne ou Suisse. Vous pouvez à tout moment connaître le montant des frais de traitement et d'expédition en consultant votre panier. </p>
            <h4>Autres pays </h4>
            <p>Les frais de traitement et d'expédition sont calculés en fonction du poids de votre commande et du pays de destination. Vous pouvez choisir entre 2 formules : Colissimo International ou Colissimo DOM. Vous pouvez à tout moment connaître le montant des frais de traitement et d'expédition en consultant votre panier. </p>
            <p>A noter également que votre commande vous est facturée hors taxes. Selon les pays, des taxes de douane peuvent vous être demandées en sus lors de la livraison. </p>

            <h2>Liste des Pays Livrables</h2>

            <table>


              <tbody>
                <tr>
                  <td>Açores</td>
                  <td>Allemagne</td>
                  <td>Andorre</td>
                  <td>Autriche</td>
                  <td>Belgique</td>
                </tr>
                <tr>
                  <th>Bulgarie</th>
                  <th>Canaries (Iles) </th>
                  <th>Chypre</th>
                  <th>Croatie</th>
                  <th>Danemark</th>
                </tr>
                <tr>
                  <th>Espagne</th>
                  <th>Estonie </th>
                  <th>Qatar</th>
                  <th>Finlande</th>
                  <th>France</th>
                </tr>
                <tr>
                  <th>Grèce</th>
                  <th>Canada </th>
                  <th>Emirates Arabie </th>
                  <th>Hongrie </th>
                  <th>Irlande</th>
                </tr>
                <tr>
                  <th>Italie</th>
                  <th>Lettonie </th>
                  <th>Liechtenstein </th>
                  <th>Lituanie </th>
                  <th>Luxembourg</th>
                </tr>
                <tr>
                  <th>Italie</th>
                  <th>Madère </th>
                  <th>Malte </th>
                  <th>Martinique </th>
                  <th>Mayotte</th>
                </tr>
                <tr>
                  <th>Norvège</th>
                  <th>Nouvelle-Calédonie </th>
                  <th>Pays-Bas </th>
                  <th>Pologne </th>
                  <th>Polynésie Française </th>
                </tr>
                <tr>
                  <th>Portugal</th>
                  <th>Usa </th>
                  <th>Roumanie </th>
                  <th>Russie </th>
                  <th>Japon</th>
                </tr>
                <tr>
                  <th>Taiwan</th>
                  <th>Slovaquie </th>
                  <th>Slovénie </th>
                  <th>Suède </th>
                  <th>Suisse</th>
                </tr>
                <tr>
                  <th>Tchèque (République)</th>
                  <th>Vatican </th>
                  <th>Arabie Saoudite </th>
                  <th>Suède </th>
                  <th>Suisse</th>
                </tr>
                <!-- Ajoutez les autres lignes ici -->
              </tbody>
            </table>

            <p>Nous ne livrons pas les destinations en code SP. </p>
            <p>Pour plus d'informations, veuillez contacter notre service clientèle. </p>

          </div>

          <div>
            <h3>Article 4 - Passation des commandes</h3>
            <p>Vous pouvez passer vos commandes de deux manières :</p>
            <ol>
              <li>Sur Internet : <a href="../index.php">www.lebonprix.com</a></li>
              <li>Par téléphone : au +33 (0)247383722 (appel non surtaxé).</li>
            </ol>
          </div>
          <div>
            <h3>Article 5 - Validation d'une commande</h3>
            <h4>Validation par le Client </h4>
            <p>Vous déclarez avoir pris connaissance et accepté les présentes Conditions Générales de Vente avant la passation de votre commande. La validation de votre commande vaut donc acceptation de ces Conditions Générales de Vente. Pour les commandes passées directement sur notre site internet ou par téléphone si vous nous avez laissé une adresse mail, vous recevrez un mail de confirmation de votre commande. </p>
            <p>Sauf preuve contraire, les données enregistrées par Lebonprix constituent la preuve de l'ensemble des transactions passées entre Lebonprix et ses clients. </p>
            <h4>Validation par Lebonprix </h4>
            <p>A réception des commandes, Lebonprix s'assure de la cohérence des données communiquées. Dans le cadre de sa politique de lutte contre les paiements frauduleux, Lebonprix se réserve le droit de mener toute investigation nécessaire avant la validation d'une commande. Cela peut inclure notamment la demande d'un justificatif de domicile ou la demande des coordonnées de votre agence bancaire. Lorsqu'une telle procédure est lancée, la validation de la commande est suspendue. Si la commande n'était pas validée dans un délai de 5 jours, la commande serait annulée et les sommes payées remboursées. Ce délai peut être allongé si des échanges de documents sont en cours entre le client et Lebonprix. </p>
          </div>

          <div>
            <h3>Article 6 - Produits </h3>
            <h4>Disponibilité </h4>
            <p>Nos offres de produits , dans la limite des stocks disponibles. </p>
            <p>Dans l'éventualité d'une indisponibilité de produit après passation de votre commande (erreur de stock, casse d'un produit), nous vous en informerons par mail ou téléphone. Nous vous proposerons alors au choix : </p>
            <ul>
              <li>le remboursement en bon d'achat, </li>
              <li>l'annulation pure et simple de votre commande. La validation sera suspendue jusqu'à votre réponse. </li>
              <li></li>
            </ul>

            <h4>Photographies des produits </h4>
            <p>Les photographies illustrant les produits proposés sur le site Lebonprix sont fournies à titre indicatif. Les éventuelles variations entre ces photographies et les produits n'engagent pas la responsabilité de Lebonprix . </p>
          </div>

          <div>
            <h3>Article 7 - Livraison </h3>
            <p>Les produits sont livrés à l'adresse de livraison ou au point relais que vous avez indiqué au cours du processus de commande. Pour les livraisons en France, les livraisons sont effectuées par La Poste, ou Mondial relais.</p>
            <p>En cas de paiement par carte bancaire, les commandes sont expédiées le jour même pour les commandes passées avant 11h et le lendemain pour les commandes passées après 11h. Les commandes validées le vendredi après 11h sont expédiées le lundi suivant sauf ouverture exceptionnelle le samedi notamment en décembre. Les commandes validées le samedi et le dimanche sont expédiées le lundi. Les jours fériés sont considérés comme un dimanche. </p>
            <p>En cas de paiement par chèque et pour des raisons de contrôle, les commandes sont expédiées entre 1 et 10 jours suivant l'encaissement du chèque. </p>
            <p>En cas de paiement par virement, les commandes sont expédiées le lendemain de la réception du virement. Pour les virements réceptionnés le vendredi, les commandes sont expédiées le lundi suivant. </p>
          </div>

          <div>
            <h3>Article 8 - Délais de livraison </h3>
            <p>Les délais de livraison indiqués ici sont valables dans des conditions normales de services et pour des envois effectués par nos transporteurs habituels. </p>
            <p>Si le traitement de votre commande (notamment en raison du poids des colis…) nécessitait une solution de routage particulière, les délais de livraison vous seraient précisés lors de votre commande. Si ces délais ne devaient pas vous satisfaire, vous auriez la possibilité d'annuler votre commande. </p>
            <p>De même en cas de grève des services de poste, des transporteurs routiers, (plus généralement de toute perturbation sociale), ou d'incidents climatiques, les délais de livraison pourraient être allongés. </p>
            <h4>France</h4>
            <p>Pour les envois en Colissimo suivi, vous recevrez votre colis dans un délai de 48 – 72 heures ouvrées suivant la date d'expédition pour toute commande passée avant 11h du lundi au vendredi. </p>
            <p>Pour les envois en Mondial Relais, vous recevrez votre colis au point relais dans un délai de 48 heures suivant la date d'expédition pour toute commande passée avant 11 h du lundi au vendredi. </p>
            <p>Attention : les points relais ne reçoivent pas de colis le samedi et les points relais étant des commerçants, ceux-ci peuvent avoir des jours de fermeture hebdomadaire. </p>
            <p>Ces délais s'entendent pour les livraisons en France Métropolitaine, pour les jours ouvrés, hors problème d'acheminement postal et selon disponibilité des produits. </p>
            <h4>Les autres pays </h4>
            <p>Pour l'Union Européenne et la Suisse, les livraisons s'effectuent généralement sous 7 jours ouvrés (délais moyens constatés). Pour les autres pays , les délais d'acheminement varient selon la distance et les transporteurs. </p>
            <p>Notre Service Commercial peut vous fournir tout complément ainsi qu'une estimation des délais de livraison. </p>
            <p>En cas d'absence à votre domicile lors du passage du livreur, un avis de passage sera déposé dans votre boite aux lettres. Vous pourrez alors retirer votre colis dans l'agence indiquée sur le bon de passage muni d'une pièce d'identité et du bon de passage. </p>
            <p>Si le destinataire ne réclame pas le colis dans un délai de 15 jours, il nous sera retourné et nous vous en informerons par e-mail. </p>
          </div>
          <div>
            <h3>Article 9 - Dates limites de livraison </h3>
            <p>Les délais indiqués à l'article 8 sont les délais de livraison habituellement observés. Nous nous engageons à livrer les commandes : </p>
            <ul>
              <li>A destination de la France : dans les 15 jours maximum suivant réception du règlement</li>
              <li>A destination de l'Europe : dans les 30 jours maximum suivant réception du règlement </li>
              <li>A destination du reste du monde : dans les 60 jours maximum suivant réception du règlement </li>
            </ul>
          </div>

          <div>
            <h3>Article 10 - Paiement </h3>
            <p>Le règlement de vos achats s'effectue comptant : </p>
            <ul>
              <li>soit sur notre site par carte bancaire : Visa, MasterCard, American Express, autres cartes bleues (e-Carte Bleue) - Les paiements sont sécurisées par les solutions Checkout.com ou Paybox en liaison avec notre banque Société General. </li>
              <li>soit par téléphone au moyen des cartes bancaires listées ci-dessus </li>
              <li>soit par chèque : celui-ci doit être émis par une banque domiciliée en France métropolitaine ou à Monaco, la mise à l'encaissement du chèque est réalisée à la réception du chèque. </li>
              <li>soit par virement bancaire SEPA : national ou international. </li>
            </ul>

            <p>Aucun délai de paiement n'est accordé et les commandes ne sont pas envoyées tant que le règlement n'a pas été réceptionné et encaissé. </p>
            <p>Certains produits ne sont pas éligibles au paiement par chèque, Paypal, virement SEPA . </p>
            <p>Les codes réductions sont applicables uniquement sur la valeur des produits, qui doit atteindre au minimum la valeur du bon d'achat et ne peut concerner les frais de port. Cette offre est non cumulable. Les codes réductions ne sont pas rétroactifs et ne peuvent plus être appliqués une fois la commande passée. Les codes réductions faisant bénéficier de produits offerts sont valables dans les limites de stock disponibles. Les codes réductions sont valables jusqu'à leur date limite de validité. </p>
          </div>

          <div>
            <h3>Article 11 - Service Après Vente</h3>
            <h4>Période de rétractation </h4>
            <p>Vous disposez d'un délai de 7 jours à compter de la réception de vos produits pour exercer votre droit de rétractation auprès de Lebonprix sans avoir à justifier de motifs ni à payer de pénalité. </p>
            <p>En cas d'exercice du droit de rétractation dans le délai susvisé, nous vous demandons de prendre contact avec notre service clientèle par email à Lebonprix37@yahoo.com</p>
            <p>Nous vous rembourserons le ou les produits concerné(s) dans un délai maximal de 14 sous réserve d'avoir bien réceptionné les produits en retour. Les retours sont à effectuer dans leur état d'origine et complets (emballage, accessoires, notice...) Adresse de retour Lebonprix 1 rue du 11Novombre 37360Sonzay En cas de non réception des produits dans le délai des 14 jours, nous différerons le remboursement jusqu'à réception des retours. </p>
            <p>Les frais de retour sont à la charge de l'acheteur. </p>
            <h5>Limitations du droit de rétractation </h5>
            <p>Nous ne pourrons pas accepter les retours de produits ayant été ouverts ou dont l'emballage aurait été détérioré. Aucun retour ou remplacement de produit ne sera accepté pour les produits frais, les produits sur commande ou pour tous les produits après expiration de la date limite de consommation. Si ces produits étaient néanmoins retournés, ils ne feraient l'objet d'aucun remboursement sous quelque forme que ce soit. </p>
            <p>Aucun retour ou remplacement de produit ne sera accepté après un délai d'un mois suivant votre commande. </p>
            <h3>Erreurs de préparation de commande </h3>
            <p>Nous vous remercions de bien vouloir prendre contact avec les équipes du Service Après Vente Lebonprix </p>
            <p>Lebonprix procédera à toutes vérifications utiles et sollicitera si besoin le client pour lui demander tous renseignement, ou photos utiles. A la suite de cela, Lebonprix pourra répondre favorablement ou défavorablement aux demandes du client. Si la réponse est favorable : </p>
            <ul>
              <li>Le cas échéant, Lebonprix demandera le retour à ses frais des produits expédiés par erreur. </li>
              <li>Pour les produits non reçus par le client, ils seront soient remboursés soient re-expédiés à la charge de Lebonprix. </li>
            </ul>
            <h3>Garantie Satisfait ou Remboursé </h3>
            <p>Si après utilisation des produits, vous n'étiez pas entièrement satisfait par les produits, commandés sur Lebonprix, nous vous remercions de bien vouloir prendre contact avec les équipes du Service Après Vente de Lebonprix pour décrire précisément le motif de votre insatisfaction. </p>
            <p>Nous vous demanderons alors de nous exposer clairement le motif de votre insatisfaction. Si nous donnons suite à votre demande : </p>
            <ul>
              <li>nous nous réservons le droit de vous demander le retour à nos frais dans les meilleurs délais du produit concerné dans son emballage original pour pouvoir ouvrir une enquête qualité </li>
              <li>nous vous proposerons le remboursement du produit acheté (hors frais de port). Si la demande au titre de la garantie « satisfait ou remboursé » porte sur un article commandé en plusieurs unités, nous ne pourrons rembourser au plus qu'un seul article ouvert. Les autres articles devront être renvoyés intacts dans leur emballage d'origine.</li>
            </ul>
            <p>Cette garantie « satisfait ou remboursé » est limitée dans le temps à un délai de deux mois suivant la commande. Ce délai étant réduit à 15 jours pour les produits à consommer à la réception de la commande. </p>
          </div>
          <div>
            <h3>Article 12 - Remboursement </h3>
            <p>Les remboursements des produits dans les hypothèses visées à l'article 10 seront effectués dans les meilleurs délais et au plus tard dans les 30 jours suivant la date à laquelle le droit a été exercé. Le remboursement s'effectuera sur proposition de Lebonprix: </p>
            <ul>
              <li>Pour les paiements par carte bleue, soit par bon d'achat soit par crédit sur le compte bancaire du client, soit par chèque. </li>
              <li>Pour les paiements par chèque ou virement bancaire, remboursement soit par bon d'achat soit par chèque bancaire adressé au nom du client ayant passé la commande et à l'adresse de facturation. </li>
            </ul>
            <p>Dans le cas d'un paiement total ou partiel par chèques cadeaux, ceux-ci ne peuvent être remboursés ni en espèces, ni par chèque, ni par carte bancaire. Le remboursement des achats effectués par chèques cadeaux s'effectuera exclusivement sous forme de chèques cadeaux. </p>
          </div>
          <div>
            <h3>Article 13 - Responsabilité de Lebonprix </h3>
            <p>Lebonprix décline toute responsabilité, civile ou pénale, qui pourrait résulter d'un usage impropre des produits commercialisés ou pour des dommages dont la responsabilité incomberait au fournisseur du produit incriminé. </p>
            <p>Lebonprix se réserve le droit de retirer ou de modifier tout contenu publié sur son site internet et ce pour des raisons légales ou techniques. </p>
          </div>
          <div>
            <h3>Article 14 - Droit applicable - Litiges </h3>
            <p>Le présent contrat est soumis à la loi française. La langue du présent contrat est la langue française. En cas de litige, les clients peuvent saisir à leur choix les juridictions du ressort de Mende (juridictions de l'adresse du siège social de Lebonprix) ou pour les seuls clients européens (y compris français) les juridictions du lieu de la livraison effective de la commande passée sur Lebonprix. </p>
          </div>

          <div>
            <h3>Article 15 - Droit d'accès et de rectification </h3>
            <p>Vous disposez d'un droit d'accès et de rectification sur l'ensemble des données vous concernant conformément au droit défini par la Commission National Informatique et Liberté (CNIL). </p>
            <p>Il est également porté à l'attention des utilsateurs du site Lebonprix transmet des données non personnelles à un Tiers autorisé (Google, Criteo, Shopzilla…) par l'utilisation de cookies tiers aux fins de collecter et d'utiliser des données de navigation des utilisateurs du site Lebonprix Ces tiers autorisés utilisent les données de navigation des utilisateurs du site Lebonprix conformément aux dispositions de la Loi Informatique et Libertés modifiée par la loi du 06 août 2004 et conformément à sa Charte de respect de la vie privée. </p>
          </div>
          <div>
            <h3>Article 16 - Propriété intellectuelle </h3>
            <p>Tous les éléments des sites internet de Lebonprix sont et restent la propriété intellectuelle exclusive de Lebonprix. Nul n'est autorisé à reproduire, exploiter, diffuser ou utiliser à quelque titre que ce soit et même partiellement des éléments du site qu'ils soient logiciels, visuels ou sonores. </p>
            <p>Tout lien simple ou hypertexte est strictement interdit sans un accord écrit de Lebonprix </p>
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