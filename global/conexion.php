<?php

$server="localhost";
$user="root";
$password="";
$db="wowgames";

try {
    $conn = new PDO("mysql:host=$server;dbname=$db;",$user, $password);
} catch (PDOException $e) {
    die("connected failed: ".$e->getMessage());
}
?>