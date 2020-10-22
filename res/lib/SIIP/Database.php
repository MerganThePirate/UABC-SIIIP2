<?php

$dsn = "mysql:host=localhost;dbname=siiip;charset=utf8";
$user = "siiip";
$password = "des.siiip.2020!";

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
