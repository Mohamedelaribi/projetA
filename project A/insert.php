<?php
include "connect.php";
$name =$_POST['nom'];

$insertData = $connectDb ->prepare("INSERT INTO category (NomCategory)VALUES('$name')");
$insertData->execute();
?>