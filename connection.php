<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "art_site";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}
?>
