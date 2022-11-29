<?php

function db_connect()
{
    $db['host'] = "localhost";
    $db['username'] = "root";
    $db['password'] = "";
    $db['db_name'] = "projectdb";
    $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['db_name']);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

/* function get_coursen()
{
    $conn = db_connect();
    $sql = "select course_id,c_name from course";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
} */

require "pdo.php";
require "old.php";
