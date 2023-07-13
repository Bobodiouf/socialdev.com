<?php
require_once "Database.php";

function create($tableName, $data, $PDO)
{
    try {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $sql = "INSERT INTO $tableName ($columns) VALUES ($placeholders)";
        $stmt = $PDO->prepare($sql);
        $stmt->execute($data);
        echo "L'enregistrement a été créé avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de la création de l'enregistrement : " . $e->getMessage();
    }
}

function read($tableName, $PDO)
{
    try {
        $sql = "SELECT * FROM $tableName";
        $stmt = $PDO->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        echo "Erreur lors de la lecture des enregistrements : " . $e->getMessage();
        return null;
    }
}

function update($tableName, $data, $id, $PDO)
{
    try {
        $setValues = "";
        foreach ($data as $column => $value) {
            $setValues .= "$column = :$column, ";
        }
        $setValues = rtrim($setValues, ", ");
        $sql = "UPDATE $tableName SET $setValues WHERE id = :id";
        $data['id'] = $id;
        $stmt = $PDO->prepare($sql);
        $stmt->execute($data);
        echo "L'enregistrement a été mis à jour avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de la mise à jour de l'enregistrement : " . $e->getMessage();
    }
}

function delete($tableName, $id, $PDO)
{
    try {
        $sql = "DELETE FROM $tableName WHERE id = :id";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(['id' => $id]);
        echo "L'enregistrement a été supprimé avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de la suppression de l'enregistrement : " . $e->getMessage();
    }
}
