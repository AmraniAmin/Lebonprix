<?php
// connexion à la base de données
require_once '../BD/config.php';

if (isset($_POST['envoyer'])) {

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    // Check if the connection is successful before proceeding
    if ($conn) {

        $sql = ("INSERT INTO `formulairescontact`(`nom`, `email`, `telephone`, `object`, `message`) VALUES(:nom, :email, :telephone, :sujet, :message)");
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':sujet', $sujet);
        $stmt->bindParam(':message', $message);

        $stmt->execute();
    } else {
        // Handle connection error if necessary
        echo "Connection to the database failed.";
    }
}
?>