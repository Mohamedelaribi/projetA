<?php

    include "connect.php";        
    $name =$_POST['nom'];
    $prenom =$_POST['prenom'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $telephone = $_POST["telephone"];
    $type = $_POST["type"];
    $_SESSION['name']=$name;
    $_SESSION['Prenom'] =$prenom;

    $checkemail =$connectDb->prepare("SELECT Email FROM Users WHERE Email='$email'");
    $checkemail->execute();

    if($checkemail->rowCount()>0){
        echo 1;
    }else{
    $insertData = $connectDb ->prepare("INSERT INTO Users (Nom,Prenom, Telephone,Email,Passwoord,TypeUser)VALUES('$name','$prenom','$telephone','$email','$password','$type')");
    $insertData->execute();
    echo 0;
    }
    ?>
