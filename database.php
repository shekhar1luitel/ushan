<?php

$host = "localhost";
$database = "russ";
$username = "shekhar";
$password = "password";
$connection;

try {
    $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected";w
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function create($tableName, $data)
{
    global $connection;

    try {
        $columns = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));
        $sql = "INSERT INTO $tableName ($columns) VALUES ($values)";
        $stmt = $connection->prepare($sql);

        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }

        $stmt->execute();
        echo "Record created successfully";
        return true;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function read($tableName, $condition = '')
{
    global $connection;

    try {
        $sql = "SELECT * FROM $tableName $condition";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return [];
    }
}

function readAll($tableName, $condition = '')
{
    global $connection;

    try {
        $sql = "SELECT * FROM $tableName $condition";

        $stmt = $connection->prepare($sql);
        $stmt->execute();
        // dd($sql); // Assuming dd is a debugging function
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return [];
    }
}

function update($tableName, $data, $condition)
{
    global $connection;

    try {
        $setClause = implode("=?, ", array_keys($data)) . "=?";
        $sql = "UPDATE $tableName SET $setClause $condition";
        $stmt = $connection->prepare($sql);
        $i = 1;
        foreach ($data as $value) {
            $stmt->bindValue($i++, $value);
        }
        $stmt->execute();
        return true; // Changed to true
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function delete($tableName, $condition)
{
    global $connection;

    try {
        $sql = "DELETE FROM $tableName $condition";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        echo "Record deleted successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
