<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $civilite = $_POST["civilite"];
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $date_naissance = $_POST["date_naissance"];
  $adresse = $_POST["adresse"];
  $ville = $_POST["ville"];
  $code_postal = $_POST["code_postal"];
  $telephone = $_POST["telephone"];
  $email = $_POST["email"];
  $situation = $_POST["situation"];
  $investissement = $_POST["investissement"];
  $zone = $_POST["zone"];
  $location = $_POST["location"];
  $superficie = $_POST["superficie"];
  $emplacement = $_POST["emplacement"];
  $description_projet = $_POST["description_projet"];

  $mail = new PHPMailer(true);

  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ftuutr.tuut@gmail.com';  // Remplacez par votre adresse Gmail
    $mail->Password = '';     // Remplacez par votre mot de passe Gmail
    $mail->SMTPSecure = 'null';
    $mail->Port = 587;
    // Options de désactivation du certificat
    $mail->SMTPOptions = array(
      'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      )
    );

    // Paramètres supplémentaires pour Gmail
    $mail->setFrom('hfhhhhhh .hhfhf@gmail.com', 'Contact');  // Remplacez par votre adresse Gmail et votre nom
    $mail->addAddress('hhffhf.h@gmail.com');  // Remplacez par l'adresse e-mail de destination
    $mail->Subject = 'Nouveau formulaire de demande de franchise';

    // Contenu du message
    $message = "Genre: $civilite\n";
    $message = "Nom: $nom\n";
    $message .= "Prénom: $prenom\n";
    $message .= "Date de naissance: $date_naissance\n\n";
    $message .= "Adresse: $adresse\n";
    $message .= "Ville: $ville\n";
    $message .= "Code Postal: $code_postal\n";
    $message .= "Téléphone: $telephone\n";
    $message .= "E-mail: $email\n\n";
    $message .= "Situation: $situation\n";
    $message .= "Investissement: $investissement k€ \n";
    $message .= "Zone: $zone\n";
    $message .= "location: $location\n";
    $message .= "Superficie: $superficie m2\n";
    $message .= "Emplacement: $emplacement\n";
    $message .= "Description du projet: $description_projet";

    $mail->Body = $message;

    $mail->send();
    echo 'Le formulaire a été envoyé avec succès.';
  } catch (Exception $e) {
    echo 'Erreur lors de l\'envoi du formulaire : ', $mail->ErrorInfo;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lebonprix.fr</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- styles css entete body et footer -->
  <link rel="stylesheet" href="../styles/style.css">
  <!-- style css franchise  -->
  <style>
    .franchise .container div {
      display: grid;
      grid-template-columns: repeat(2 1fr);
      width: 90%;
      margin: 20px auto;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border: .1rem solid rgb(17, 17, 17);
      border-radius: 2rem;
    }

    .franchise .container div:hover {
      background-color: rgb(208, 210, 210);
    }

    .franchise h2 {
      color: #1132eb;
      font-size: 2rem;
      text-decoration: underline;

    }

    .franchise .intro p,
    .requirements ul,
    .franchise-advantages ul,
    .partnership p,
    .franchise-details ul {
      margin-bottom: 15px;
      font-size: 1.2rem;
      padding-top: .5rem;
    }

    .franchise ul {
      list-style-type: disc;

    }

    .franchise .partnership p.remplir {
      background-color: #abadb9;
      width: 450px;
      margin: auto;
      padding: .5rem;
      border-radius: .8rem;
      font-size: 1.5rem;
      margin-top: 10px;
    }

    /* Existing styles remain the same */

    .container-form {
      width: 70%;
      /* Adjusted width for better responsiveness */
      margin: auto;
      background: #fff;
      padding: 20px;
      margin-top: 50px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .container-form label {
      display: block;
      margin-bottom: 8px;
    }

    main .container-form input,
    select,
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    .container-form input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .container-form input[type="submit"]:hover {
      background-color: #45a049;
    }

    /* Alignement des bouton radio horizontallement  */
    .container-form .radio-group {
      display: flex;
      gap: 20px;
    }

    .container-form .radio-group label {
      margin: auto;
      margin-bottom: 30px;
    }

    .container-form .cloture-formulaire p {
      margin-top: 2rem;
      font-size: 1.5rem;
      color: rgb(240, 177, 60);
    }

    /* Responsive styles using media queries */
    @media only screen and (max-width: 768px) {
      .container-form {
        width: 90%;
        /* Adjusted width for smaller screens */
      }
    }
  </style>
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
              <a href="connexion/connexion.php">
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
              <a href="lien/cavevins.php">Cave</a>
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

    <main>
      <section class="franchise">
        <h1>Franchise Lebonprix</h1>
        <div class="section-divider"></div>

        <div class="container">
          <div class="intro">
            <h2>Vous avez l’âme d’un entrepreneur ? Vous aimez les challenges ?</h2>
            <p> La franchise Lebonprix vous permet de réaliser pleinement vos ambitions de futur chef d'entreprise.
              Solidité, puissance et accompagnement complet : investissez dans une épicerie fine et devenez l’un de nos franchisés en toute sérénité !</p>
          </div>

          <div class="requirements">
            <h2>La franchise Lebonprix, c’est pour qui ?</h2>
            <ul>
              <li>Engagés, dynamiques,</li>
              <li>Animés par un sens développé du service,</li>
              <li>Par les valeurs de la proximité (qualité et personnalisation de la relation, confiance, etc.),</li>
              <li>Et par l’envie de progresser sans cesse, avec qui nous pourrions imaginer le commerce de demain : un commerce convivial, sain, connecté et qui porte l’ambition d’une transition alimentaire pour tous !</li>
            </ul>
          </div>

          <div class="franchise-advantages">
            <h2>Les atouts nécessaires pour devenir franchisé :</h2>
            <ul>
              <li>Avoir l’âme d’un commerçant ;</li>
              <li>Avoir le sens du service et être à l’écoute des clients ;</li>
              <li>Être attiré par la distribution alimentaire ;</li>
              <li>Être un bon gestionnaire ;</li>
              <li>Avoir le sens de l’organisation et de réelles compétences managériales.</li>
            </ul>
          </div>

          <div class="partnership">
            <p>Seul ou en couple, avec ou sans expérience dans la distribution alimentaire, nous construirons avec vous un projet qui vous ressemble.Prêt pour un partenariat gagnant-gagnant et une relation de confiance dans la durée ?</p>
            <p class="">&darr;Remplire le formulaire ci-dessous&darr;</p>
          </div>
          <div class="franchise-details">
            <h2>Conditions d'accès à la franchise Lebonprix</h2>
            <ul>
              <li>Superficie minimale du local : 40m²</li>
              <li>Coût de l’investissement total (hors fonds de commerce) : 1000 € à 2000 € le m² (Agencement total du magasin)</li>
              <li>Contrat de franchise : 7 ans</li>
              <li>Droits d’entrée : 25 000 € HT</li>
              <li>Formation initiale : 15 000 € HT</li>
              <li>Redevance d’enseigne : 5% du CA</li>
              <li>Redevance communication : 2% du CA</li>
            </ul>
          </div>

          <div class="join-g-la-dalle">
            <p>Vos candidatures sont analysées avec soin et transparence, merci de bien renseigner les champs demandés.</p>
          </div>
        </div>
      </section>
      <div class="container-form">
        <form action="franchise.php" method="post">
          <h3>Vos informations personnelles </h3>
          <label for="civilite">Civilité :</label>
          <select id="civilite" name="civilite" required>
            <option value="mademoiselle">Mademoiselle</option>
            <option value="mademoiselle">Monsieur</option>
            <option value="mademoiselle">Madame</option>
            <!-- Ajoutez d'autres options au besoin -->
          </select>

          <div class="text">

            <label for="nom">Nom * :</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom" required>

            <label for="prenom">Prénom *:</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>

          </div>

          <label for="date_naissance">Date de naissance *:</label>
          <input type="date" id="date_naissance" name="date_naissance" placeholder="Votre date de naissance" required>

          <label for="adresse">Adresse *:</label>
          <input type="text" id="adresse" name="adresse" placeholder="Votre adresse postale" required>

          <label for="ville">Ville *:</label>
          <input type="text" id="ville" name="ville" placeholder="Ville" required>

          <label for="code_postal">Code Postal *:</label>
          <input type="text" id="code_postal" name="code_postal" placeholder="Code postal de votre ville" required>

          <label for="telephone">Téléphone *:</label>
          <input type="tel" id="telephone" name="telephone" placeholder="Votre n° de téléphone" required>

          <label for="email">Adresse email *:</label>
          <input type="email" id="email" name="email" placeholder="Adresse email" required>

          <h3>Votre situation</h3>
          <div class="radio-group">
            <label><input type="radio" name="situation" value=""> Salarié</label>
            <label><input type="radio" name="situation" value=""> Entrepreneur</label>
            <label><input type="radio" name="situation" value=""> Autre</label>
          </div>

          <label for="investissement">Capacité d’investissement * en euro:</label>
          <select id="investissement" name="investissement" required>
            <option value="150-200">25000 - 30000</option>
            <option value="150-200">35000 - 40000</option>
            <option value="150-200">45000 - 50000</option>
          </select>

          <label for="zone">Zone ou région souhaitée :</label>
          <input type="text" id="zone" name="zone" placeholder="Quelle est la zone où sera située la franchise?" required>

          <label for="location">Vous êtes *:</label>
          <div class="radio-group">
            <label><input type="radio" name="location" value="proprietaire"> Propriétaire d’un local commercial</label>
            <label><input type="radio" name="location" value="locataire"> Locataire d’un local commercial</label>
            <label><input type="radio" name="location" value="acquisition"> En cours d’acquisition d’un local commercial</label>
          </div>

          <label for="superficie">Superficie en m2 :</label>
          <input type="text" id="superficie" name="superficie" placeholder="Superficie du local commercial" required>

          <label for="emplacement">Emplacement :</label>
          <input type="text" id="emplacement" name="emplacement" placeholder="Adresse du local commerciale" required>

          <h3>Votre projet</h3>

          <label for="description_projet">Décrivez votre projet en quelques lignes *:</label>
          <textarea id="description_projet" name="description_projet" rows="1" required></textarea>

          <input type="submit" value="Envoyer">
        </form>

        <div class="cloture-formulaire">
          <p>
            Les informations portées sur ce formulaire suivies d’un astérisque sont obligatoires :
            à défaut de réponse, nous ne serons pas en mesure de traiter votre candidature à la franchise.
          </p>
          <p>
            Nous vous remercions d’avoir répondu à ce questionnaire. Après étude, nous reviendrons vers vous. Bien à vous.
          </p>
        </div>
      </div>
    </main>
    <!-- pied du page  -->
    <footer>
      <div class="row">
        <div class="col">
          <img class="logo" src="../images/logolebonprix.jpg">
          <a href="#">
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

  <script src="app-panier.js"></script>
</body>

</html>