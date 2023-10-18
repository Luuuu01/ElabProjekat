<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'kolokvijumi';

$conn = new mysqli($host, $user, $pass, $db);
// echo "uspesno povezivanje sa bazom"; //radi provere

if ($conn->connect_errno) {
    exit("Neuspesna konekcija: " . $conn->connect_errno);
}
?>