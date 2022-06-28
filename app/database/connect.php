<?php

$host = 'localhost';
$user = '379833';
$pass = 'togrulisco';
$db_name = '379833';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
