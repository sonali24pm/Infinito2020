<?php

$servername="localhost";
$username= "root";
// $user = "root"; 
$charset="utf8mb4";
$password="";
$database="infinitoadmin1";
$conn=mysqli_connect($servername ,$username ,$password ,$database);
<<<<<<< HEAD

$dsn = "mysql:host=$servername; dbname=$database;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
=======
?>
>>>>>>> 1a444dcd44fa83a433bd99f8feed1485e644bc62
