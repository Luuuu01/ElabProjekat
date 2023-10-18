<?php
 require "dbroke.php";  
 require "model/user.php"; 
 
 // Establišite konekciju sa bazom
 $conn = new mysqli($host, $user, $pass, $dbName);
 
 // Proverite konekciju
 if ($conn->connect_errno) {
     exit("Neuspesna konekcija: " . $conn->connect_errno);
 }
?>