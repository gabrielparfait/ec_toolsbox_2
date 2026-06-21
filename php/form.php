<?php
// Autoriser les requêtes venant de ton environnement de test ou du site
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Gérer la requête de pré-vérification (Preflight) des navigateurs
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit;
}

$json = file_get_contents('php://input');
$data = json_decode($json);

if (isset($data->message) && isset($data->email)) {

    // Validation basique de l'email
    if (!filter_var($data->email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Email invalide."]);
        exit;
    }

    $to = 'raffypeggy@yahoo.fr';
    $subject = 'Envoi depuis la page Contact Raffy-Hideux.fr';

    // Construction propre du message
    $message_content = "Message de : " . $data->email . "\n\n" . $data->message;

    // Headers sous forme de chaîne de caractères (mieux supporté par OVH en mode auto)
    $headers = "From: contact@raffy-hideux.fr\r\n";
    $headers .= "Reply-To: " . $data->email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Envoi de l'e-mail avec un paramètre additionnel (-f) obligatoire chez certains hébergeurs
    $retour = mail($to, $subject, $message_content, $headers, "-f contact@raffy-hideux.fr");

    if($retour) {
        echo json_encode(["status" => "success", "message" => "Votre message a été envoyé."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Le serveur n'a pas pu envoyer le mail."]);
    }
}
?>
