<?php
require_once "CRUD.php";

function validateFields(array $fields): bool
{
    // Vérification des champs du formulaire avec des regex ou autres validations
    foreach ($fields as $fieldName => $fieldValue) {
        switch ($fieldName) {
            case 'username':
                // Valider le champ "username" avec une expression régulière
                if (!preg_match('/^[a-zA-Z0-9_]{3,20}$/', $fieldValue)) {
                    return false;
                }
                break;
            case 'email':
                // Valider le champ "email" avec la fonction filter_var
                if (!filter_var($fieldValue, FILTER_VALIDATE_EMAIL)) {
                    return false;
                }
                break;
            // Ajoutez d'autres validations pour les champs supplémentaires
        }
    }
    return true;
}

function checkDatabase(array $fields, PDO $pdo): bool
{
    // Vérification des informations dans la base de données
    foreach ($fields as $fieldName => $fieldValue) {
        switch ($fieldName) {
            case 'username':
                // Vérifier si le champ "username" existe déjà dans la base de données
                $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = ?");
                $stmt->execute([$fieldValue]);
                $count = $stmt->fetchColumn();
                if ($count > 0) {
                    return false;
                }
                break;
            case 'email':
                // Vérifier si le champ "email" existe déjà dans la base de données
                $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
                $stmt->execute([$fieldValue]);
                $count = $stmt->fetchColumn();
                if ($count > 0) {
                    return false;
                }
                break;
            // Ajoutez d'autres vérifications pour les champs supplémentaires
        }
    }
    return true;
}

function insertData($fields, $tableName, $pdo)
{
    // Insertion des données dans la base de données
    $columnNames = implode(", ", array_keys($fields));
    $placeholders = implode(", ", array_fill(0, count($fields), "?"));
    $values = array_values($fields);
    $sql = "INSERT INTO $tableName ($columnNames) VALUES ($placeholders)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute($values);
}

function registerUser(array $fields): void
{
    // Enregistrement des informations importantes dans des variables de session
    $_SESSION['user_id'] = $fields['id'];
    $_SESSION['email'] = $fields['email'];
    // Ajoutez d'autres variables de session selon vos besoins
}

function treatmentForm(string $method, array $fields, string $tableName, PDO $pdo): void
{
    // Vérification de la méthode utilisée
    if ($method === 'POST' || $method === 'GET' || $method === 'FILE') {
        // Vérification des champs du formulaire
        if (validateFields($fields)) {
            // Vérification des informations dans la base de données
            if (checkDatabase($fields, $pdo)) {
                // Insertion des données dans la base de données
                if (insertData($fields, $tableName, $pdo)) {
                    // Opérations supplémentaires en fonction du formulaire
                    if ($tableName === 'users') {
                        registerUser($fields);
                    } else {
                        // Autres opérations à effectuer
                    }
                } else {
                    echo "Erreur lors de l'insertion des données dans la base de données.";
                }
            } else {
                echo "Certains champs existent déjà dans la base de données.";
            }
        } else {
            echo "Certains champs du formulaire sont invalides.";
        }
    } else {
        echo "Méthode de formulaire invalide.";
    }
}