<?php

$server="localhost";
$user="root";
$password="";
$db="wowgames";

// try {
    // $conn = new PDO("mysql:host=$server;dbname=$db;",$user, $password);
    $conn = new mysqli($server, $user, $password, $db);
// } catch (PDOException $e) {
    // die("connected failed: ".$e->getMessage());
// }
?>