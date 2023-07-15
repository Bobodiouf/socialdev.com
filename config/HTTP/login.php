<?php
require_once "../Data/Data.php";

if (isset($_POST["connexion"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {

        $error = "Veuillez remplir tous les champs du formulaire.";
        header("Location: ../../home.php?erreur=$error");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = "Adresse e-mail invalide. Veuillez entrer une adresse e-mail valide.";
        header("Location: ../../home.php?erreur=$error");
        exit();
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {

        $error = "Le mot de passe doit contenir au moins 8 caractères, une minuscule, une majuscule, un chiffre et un caractère spécial.";
        header("Location: ../../home.php?erreur=$error");
        exit();
    } else {

        if ($email === 'exemple@email.com' && $password === 'motdepasse') {

            header('Location: success.php');
            exit();
        } else {

            $error = "Identifiants invalides. Veuillez réessayer.";
            header("Location: ../../home.php?erreur=$error");
            exit();
        }
    }
}