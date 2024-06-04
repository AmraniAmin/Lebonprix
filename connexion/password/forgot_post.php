<?php
require_once __DIR__ . '../../../config/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../phpmailer/src/Exception.php';
require '../../phpmailer/src/PHPMailer.php';
require '../../phpmailer/src/SMTP.php';

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);

    // Validation de l'e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Vérifier si l'utilisateur existe
        $check = $bdd->prepare('SELECT token FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        // Si l'utilisateur existe
        if ($row) {
            $token = bin2hex(openssl_random_pseudo_bytes(24));
            $token_user = $data['token'];

            // Utilisation de requête préparée pour l'insertion
            $insert = $bdd->prepare('INSERT INTO password_recover(token_user, token) VALUES (?,?)');
            $insert->execute(array($token_user, $token));

            // Création du lien avec base64_encode
            $link = 'recover.php?u=' . base64_encode($token_user) . '&token=' . base64_encode($token);

            
            $mail = new PHPMailer(true);
            // Envoyer le lien par e-mail
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'haroune.hmah@gmail.com';  // Remplacez par votre adresse Gmail
                $mail->Password = 'sazm jlgt oqvi rhbl';     // Remplacez par votre mot de passe Gmail
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
                $mail->setFrom('haroune.hmah@gmail.com', 'Contact');  // Remplacez par votre adresse Gmail et votre nom
                $mail->addAddress($email);  // Remplacez par l'adresse e-mail de destination
                $mail->Subject = 'Récupération de mot de passe';
                $mail->Body = "Cliquez sur le lien suivant pour réinitialiser votre mot de passe : http://localhost:3000/connexion/password/$link";
                // Options de désactivation du certificat

                $mail->send();
                echo 'L\'e-mail a été envoyé avec succès.';
            } catch (Exception $e) {
                echo 'Erreur lors de l\'envoi de l\'e-mail: ', $mail->ErrorInfo;
            }
        } else {
            echo "Compte non existant";
        }
    } else {
        echo "Adresse e-mail non valide";
    }
}
