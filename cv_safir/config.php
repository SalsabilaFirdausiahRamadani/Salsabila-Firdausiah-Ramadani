<?php

$host = 'localhost';
$db = 'cvdatabase';
$user = 'root';
$password = '';


$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    echo 'Connection failed!';
}
