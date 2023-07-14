<?php

function createDatabase(string $host, string $dbName, string $username, string $password): void
{
    try {
        $pdo = new PDO("mysql:host=$host", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
        $pdo->exec($sql);

        echo "La base de données $dbName a été créée avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de la création de la base de données : " . $e->getMessage();
    }
}


function get_PDO(string $host, string $dbName, string $username, string $password): ?PDO
{
    try {
        $dsn = "mysql:host=$host;dbname=$dbName";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
        return null;
    }
}

function createTable(string $tableName, array $columns, PDO $pdo): void
{
    try {
        $sql = "CREATE TABLE IF NOT EXISTS $tableName (";
        $sql .= implode(", ", $columns);
        $sql .= ") ENGINE=InnoDB DEFAULT CHARSET=utf8";

        $pdo->exec($sql);

        echo "La table $tableName a été créée avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de la création de la table : " . $e->getMessage();
    }
}
