<?php
require_once "CRUD.php";

function validateFields(array $fields): bool
{
    foreach ($fields as $fieldName => $fieldValue) {
        switch ($fieldName) {
            case 'username':
                if (!preg_match('/^[a-zA-Z0-9_]{3,20}$/', $fieldValue)) {
                    return false;
                }
                break;
            case 'email':
                if (!filter_var($fieldValue, FILTER_VALIDATE_EMAIL)) {
                    return false;
                }
                break;
        }
    }
    return true;
}

function checkDatabase(array $fields, PDO $pdo): bool
{
    foreach ($fields as $fieldName => $fieldValue) {
        switch ($fieldName) {
            case 'username':
                $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = ?");
                $stmt->execute([$fieldValue]);
                $count = $stmt->fetchColumn();
                if ($count > 0) {
                    return false;
                }
                break;
            case 'email':
                $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
                $stmt->execute([$fieldValue]);
                $count = $stmt->fetchColumn();
                if ($count > 0) {
                    return false;
                }
                break;
        }
    }
    return true;
}

function insertData($fields, $tableName, $pdo)
{
    $columnNames = implode(", ", array_keys($fields));
    $placeholders = implode(", ", array_fill(0, count($fields), "?"));
    $values = array_values($fields);
    $sql = "INSERT INTO $tableName ($columnNames) VALUES ($placeholders)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute($values);
}

function registerUser(array $fields): void
{
    $_SESSION['user_id'] = $fields['id'];
    $_SESSION['email'] = $fields['email'];
}

function treatmentForm(string $method, array $fields, string $tableName, PDO $pdo): void
{
    if ($method === 'POST' || $method === 'GET' || $method === 'FILE') {
        if (validateFields($fields)) {
            if (checkDatabase($fields, $pdo)) {
                if (insertData($fields, $tableName, $pdo)) {
                    if ($tableName === 'users') {
                        registerUser($fields);
                    } else {
                        
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