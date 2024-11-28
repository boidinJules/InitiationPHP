<?php
$jsonFile = 'data.json';
$jsonData = file_get_contents($jsonFile);
$données = json_decode($jsonData, true);

$name = $_POST['name'];
$prenom = $_POST['prénom'];
$email = $_POST['email'];
$password = $_POST['password'];
$message = $_POST['message'];
// $checkbox = $_POST['checkbox'];

if ($name && $prenom && $email && $password) {
    $nouvelUtilisateur = [
        'name' => $name,
        'prenom' => $prenom,
        'email' => $email,
        'password' => $password,
        'message' => $message,
        // 'checkbox' => $checkbox,
    ];

    $existe = false;

    if (is_array($données)) {
        foreach ($données as $utilisateur) {
            if ($utilisateur['email'] === $email) {
                $existe = true;
                echo '<div class="message error">Compte déjà existant</div>';
                // echo '<div class="message success">Bienvenue ' . $utilisateur['prenom'] . ' ' . $utilisateur['name'] . ' !</div>';
                break;
            }
        }
    }

    if (!$existe) {
        $données[] = $nouvelUtilisateur;
        file_put_contents($jsonFile, json_encode($données, JSON_PRETTY_PRINT));
        echo '<div class="message success">Nouveau compte créé</div>';
    }
}
?>