<?php

$dsn = "pgsql:host=siiip-postgres;dbname=siiip;options='--client_encoding=UTF8'";
$user = "siiip";
$password = "des.siiip.2020!";

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
