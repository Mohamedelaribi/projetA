<?php 
session_start();
$user = "root";
$password = "";
$connectDb = new PDO("mysql:host=localhost;dbname=homeforyou;",$user,$password);

?>