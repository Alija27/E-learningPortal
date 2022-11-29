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

function checkadmin()
{

    if (empty($_SESSION['user']['user_id'])) {
        die("You are not logged in!");
        // header("Location: ../?r=login");
    }
}


require "pdo.php";
require "old.php";
