<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST["nom"];
  $email = $_POST["email"];
  $telephone = $_POST["telephone"];
  $sujet = $_POST["sujet"];
  $message = $_POST["message"];

  $mail = new PHPMailer(true);

  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'amraniamin.mohammed@gmail.com';  // Remplacez par votre adresse Gmail
    $mail->Password = 'oent cjkz ccvy dapq';     // Remplacez par votre mot de passe Gmail
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
    $mail->setFrom('amraniamin.mohammed@gmail.com', 'Contact');  // Remplacez par votre adresse Gmail et votre nom
    $mail->addAddress('aminamrani19@gmail.com');  // Remplacez par l'adresse e-mail de destination
    $mail->Subject = "Nouveau message de $nom";
    $mail->Body = "Nom: $nom\nE-mail: $email\nTelephone: $telephone\nObjet: $sujet\nMessage:\n$message";
    // Options de désactivation du certificat

    $mail->send();
    echo 'L\'e-mail a été envoyé avec succès.';
  } catch (Exception $e) {
    echo 'Erreur lors de l\'envoi de l\'e-mail: ', $mail->ErrorInfo;
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

  <link rel="stylesheet" href="../styles/style.css">
  <link rel="stylesheet" href="../styles/contact.css">
</head>

<body class="">
  <div class="container">
    <header>
      <!-- menu de navigation logo & Compte utilisateur et panier à droite -->
      <nav>
        <div class="logo">
          <img class="logolebonprix" src="../images/logolebonprix.jpg" alt="">
        </div>

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

    <main>
      <section>
        <h1>Nous sommes localisés à sonzay 38700 </h1>
        <div class="section-divider"></div>

        <div class="contact">
          <div class="formulaire">
            <form action="contact.php" method="POST">
              <h2>Contactez-nous à l'aide du formulaire</h2>
              <p>Le meilleur moyen de contacter les équipes Lebonprix est de saisir votre demande via le formulaire ci-dessous. Nous mettons tout en oeuvre pour vous répondre au plus vite ou vous rediriger vers le bon interlocuteur.</p>
              <div>
                <label for="nom">Votre nom : </label>
                <input type="text" id="nom" name="nom" required="">
              </div>
              <div>
                <label for="email">Votre e-mail : </label>
                <input type="email" id="email" name="email" required="">
              </div>
              <div>
                <label for="telephone">Téléphone : </label>
                <input type="tel" id="telephone" name="telephone" required="">
              </div>
              <div>
                <label for="sujet">Objet : </label>
                <select id="sujet" name="sujet" required="">
                  <option value="order">Question sur une commande</option>
                  <option value="info">Demande d'information</option>
                  <option value="suggestion">Suggestion</option>
                  <option value="partnership">Proposition de partenariat</option>
                  <option value="press">Contact presse</option>
                  <option value="other">Divers</option>
                </select>
              </div>
              <div>
                <label for="message">Message : *</label>
                <textarea id="message" name="message" rows="10" cols="50" required="" maxlength="2500"></textarea>
              </div>
              <div>
                <input type="submit" value="Envoyer" name="envoyer">
              </div>
            </form>
          </div>
          <div class="adresse">
            <img src="../images/magasin.jpg" alt="logo-magasin-facade" width="100%">
            <h5>Nos coordonnées complètes</h5>
            <p> 1 Rue du 11 Novembre, 37360 Sonzay, France</p>
            <p class="maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86211.31357038139!2d0.3178760433593863!3d47.52684699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e2cffb7f33b653%3A0x9573f8eed475785a!2sLE%20BON%20PRIX!5e0!3m2!1sfr!2sfr!4v1707174866714!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </p>
          </div>
        </div>
      </section>
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

  <script src="../app-panier.js"></script>
</body>

</html>