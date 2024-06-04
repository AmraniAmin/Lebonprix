<?php
// Assurez-vous qu'il n'y a aucun espace blanc ni aucun texte en dehors des balises PHP dans ce fichier.
// Assurez-vous également que ce fichier est encodé en UTF-8 sans BOM.
// Vérifiez également les autres fichiers inclus dans ce script.

// Afficher les erreurs pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Démarrez la session
session_start();
$_SESSION['utilisateur_connecte'] = false;

// Inclure la connexion à la base de données
require_once('config/connexionBD.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Espace Admin</title>
</head>
<body>
    <?php require_once('../template/headerAdmin.php'); ?>
    <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; text-align: center;">
        <h1 style="font-family: 'Arial', sans-serif; color: #333; margin-bottom: 20px;">Espace Admin</h1>
        <h3 style="font-family: 'Arial', sans-serif; color: #666; margin-bottom: 20px;">Informations sur le compte</h3>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" style="background-color: #f9f9f9; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); width: 600px;">
            <div style="display: flex; align-items: flex-end; margin-bottom: 10px;">
                <label style="width: 100px; margin-right: 10px;">
                    Login: <span style="color: red">*</span>
                </label>
                <input type="text" name="login" style="flex: 1; padding: 8px; border-radius: 5px; border: 1px solid #ccc;" required>
            </div>

            <div style="display: flex; flex-direction: row; align-items: flex-end; margin-bottom: 10px;">
                <label style="width: 100px; margin-right: 10px;">
                    Mot de passe: <span style="color: red">*</span>
                </label>
                <input type="password" name="mot_de_passe" style="flex: 1; padding: 8px; border-radius: 5px; border: 1px solid #ccc;" required>
            </div>

            <input type="submit" value="Se connecter" name="verification_admin" style="margin: 20px 0px 0px 50px; padding: 10px 20px; border: none; border-radius: 5px; background-color: #007bff; color: #fff; cursor: pointer; width: 50%;"><br>

            <p style="margin-top: 20px;">Les champs marqués d'un (<span style="color: red">*</span>) sont obligatoires.</p>
        </form>
    </div>

    <?php
    if (isset($_POST["verification_admin"])) {
        echo "<p>Débogage : Formulaire soumis</p>";

        $login = $_POST["login"];
        $password = $_POST["mot_de_passe"];

        if (!empty($login) && !empty($password)) {
            // Préparer et exécuter la requête pour obtenir l'admin
            $stmt = $bdd->prepare("SELECT * FROM admin WHERE Pseudo = :login");
            $stmt->execute(['login' => $login]);
            $info = $stmt->fetch(PDO::FETCH_OBJ);

            // Ajout de messages de débogage
            echo "<p>Débogage : Requête exécutée</p>";
            if ($info) {
                echo "<p>Débogage : Utilisateur trouvé</p>";
                // Vérifiez le mot de passe avec un simple comparateur pour les tests
                if ($info->motDepasse == $password) {
                    echo "<p>Débogage : Mot de passe correct</p>";
                    $_SESSION['utilisateur_connecte'] = true;
                    header("Location:list_produits.php");
                    exit();
                } else {
                    echo "<p>Erreur d'authentification : Mot de passe incorrect.</p>";
                }
            } else {
                echo "<p>Erreur d'authentification : Utilisateur non trouvé.</p>";
            }
        } else {
            echo "<p>Veuillez remplir tous les champs.</p>";
        }
    }
    ?>
</body>
</html>
