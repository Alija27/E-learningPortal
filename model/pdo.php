<?php

function pdo()
{
    // Change DB_NAME's value to your database name
    $DB_NAME = "projectdb";
    $DB_USER = "root";
    $DB_PASS = "";
    $DB_HOST = "localhost";

    // Some Configuration (You do not need to edit below)

    $_DB_DSN = "mysql:host=" . $DB_HOST . ";dbname=" . $DB_NAME . ";charset=utf8";
    $_DB_OPT = [
        PDO::ATTR_ERRMODE        =>    PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE    =>    PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES    =>    false
    ];

    // Try Connection
    try {
        $pdo = new PDO($_DB_DSN, $DB_USER, $DB_PASS, $_DB_OPT);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Cannot Connect to Database!");
    }

    return $pdo;
}


function all($table)
{
    $pdo = pdo();
    $stmt = $pdo->query("SELECT * FROM `$table`");
    $stmt->execute();

    return $stmt->fetchAll();
}

function where($table, $key, $operator, $value = null, $all_data = false)
{
    if ($value == null) {
        $value = $operator;
        $operator = "=";
    }

    // Check If Compare is Valid

    $query = "SELECT * FROM `$table` WHERE $key $operator ?";
    $pdo = pdo();
    $stmt = $pdo->prepare($query);
    $stmt->execute([$value]);

    if ($all_data)
        return $stmt->fetchAll();

    return $stmt->fetch();
}

function query($query, $args = [], $all = true)
{
    $pdo = pdo();
    $stmt = $pdo->prepare($query);
    $stmt->execute($args);

    return $all ? $stmt->fetchAll() : $stmt->fetch();
}

function findId($table, $column, $id)
{
    return where($table, $column, '=', $id, false);
}


function countItem($table)
{
    $pdo = pdo();
    $stmt = $pdo->query("SELECT count(*) FROM `$table`");
    $stmt->execute();

    return $stmt->fetchColumn();
}

function checkItem($table)
{
    return countItem($table) > 0;
}


function create($table, $params)
{
    // First Serialize Key and Value
    $keys = array_keys($params);
    $values = array_values($params);

    // Start the Query
    $query = "INSERT INTO $table (";
    $total_keys = count($keys);

    $index = 1;
    foreach ($keys as $key) {
        $query .= $key;
        if ($total_keys != $index)
            $query .= ", ";
        $index++;
    }

    $query .= ") VALUES(";

    $total_values = count($values);
    $index = 1;
    foreach ($values as $value) {
        $query .= "?";
        if ($total_values != $index)
            $query .= ", ";
        $index++;
    }

    $query .= ")";

    try {
        $pdo = pdo();
        $stmt = $pdo->prepare($query);
        $stmt->execute($values);
    } catch (Exception $e) {
        die("Error Occured: " . $e->getMessage());
    }
}

function update($table, $column, $id, $params)
{
    // First Serialize Key and Value
    $keys = array_keys($params);
    $values = array_values($params);

    // Start the Query
    $query = "UPDATE `$table` SET ";

    $total_keys = count($keys);
    $index = 1;
    foreach ($keys as $key) {
        $query .= $key . " = ? ";
        if ($total_keys != $index)
            $query .= ", ";
        $index++;
    }

    $query .= "WHERE $column = ?";

    // Append ID at End
    $values[] = $id;
    try {
        $pdo = pdo();
        $stmt = $pdo->prepare($query);
        $stmt->execute($values);
    } catch (Exception $e) {
        die("Error Occured: " . $e->getMessage());
    }
}

function delete($table, $column, $id)
{
    $pdo = pdo();
    $stmt = $pdo->prepare("DELETE FROM $table WHERE $column = ?");
    $stmt->execute([$id]);

    return true;
}
