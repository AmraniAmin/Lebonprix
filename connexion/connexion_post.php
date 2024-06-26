<?php
session_start();           // Démarrage de la session
require_once '../config/config.php';
// Si il existe les champs email, password et qu'il sont pas vident

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $check = $bdd->prepare('SELECT pseudo, email, password, token FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $password = hash('sha256', $password);
            if ($data['password'] === $password) {
                $_SESSION['user'] = $data['pseudo'];
                header('Location:../index.php');
                die();
            } else {
                header('Location:../connexion/Connexion.php?login_err=password');
                die();
            }
        } {
            header('Location:../connexion/Connexion.php?login_err=email');
            die();
        }
    } else {
        header('Location:../connexion/Connexion.php?login_err=already');
        die();
    }
} else {
    header('Location:../connexion/Connexion.php');
    die();
}
