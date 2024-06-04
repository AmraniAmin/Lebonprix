<?php

require_once '../config/config.php';

// Si les variables existent et qu'elles ne sont pas vides
if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['adresse']) && isset($_POST['password']) && isset($_POST['password_retype'])) {
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $email = htmlspecialchars($_POST['email']);
  $telephone = htmlspecialchars($_POST['telephone']);
  $adresse = htmlspecialchars($_POST['adresse']);
  $password = htmlspecialchars($_POST['password']);
  $password_retype = htmlspecialchars($_POST['password_retype']);

  // faire un check, On vérifie si l'utilisateur existe dans notre bdd
  $check = $bdd->prepare('SELECT pseudo, email, telephone FROM utilisateurs WHERE email = ?');
  $check->execute(array($email));
  $data = $check->fetch();
  $row = $check->rowCount();

  $email = strtolower($email); // on transforme toutes les lettres majuscules en minuscules pour éviter que Foo@gmail.com et foo@gmail.com soient deux comptes différents ..

  // Si la requête renvoie un 0 alors l'utilisateur n'existe pas 
  if ($row == 0) {
    if (strlen($pseudo) <= 100) { // On vérifie que la longueur du pseudo <= 100
      if (strlen($email) <= 100) { // On vérifie que la longueur de l'email <= 100
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Si l'email est de la bonne forme
          if ($password == $password_retype) { // Si les deux mdp saisis sont bons

            // On hash le mot de passe avec password_hash
            $password = password_hash($password, PASSWORD_DEFAULT);

            // On stock l'adresse IP
            $ip = $_SERVER['REMOTE_ADDR'];

            // On insère dans la base de données
            $insert = $bdd->prepare('INSERT INTO utilisateurs (pseudo, email, telephone, adresse, password, ip, token) VALUES(:pseudo, :email, :telephone, :adresse, :password, :ip, :token)');
            $insert->execute(array(
              'pseudo' => $pseudo,
              'email' => $email,
              'telephone' => $telephone,
              'adresse' => $adresse,
              'password' => $password,
              'ip' => $ip,
              'token' => bin2hex(openssl_random_pseudo_bytes(64))
            ));
            // On redirige avec le message de succès
            header('Location: inscription.php?reg_err=success');
            die();
          } else {
            header('Location: inscription.php?reg_err=password');
            die();
          }
        } else {
          header('Location: inscription.php?reg_err=email');
          die();
        }
      } else {
        header('Location: inscription.php?reg_err=email_length');
        die();
      }
    } else {
      header('Location: inscription.php?reg_err=pseudo_length');
      die();
    }
  } else {
    header('Location: inscription.php?reg_err=already');
    die();
  }
} else {
  // Si les variables ne sont pas toutes présentes
  header('Location: inscription.php?reg_err=form_incomplete');
  die();
}
