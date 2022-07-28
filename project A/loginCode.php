<?php include'connect.php';
$email = $_POST['email'];
$password = $_POST ['password'];
$sql =  $connectDb->prepare("SELECT * FROM users WHERE Email='$email' AND Passwoord='$password'");
$sql->execute();

if($sql->rowCount()>0){
    echo"1";
    foreach($sql as $result){
        $_SESSION['name']=$result['Nom'];
        $_SESSION['Prenom'] =$result['Prenom'];
        $_SESSION['IdUser']=$result['IdUser'];
        }   
}


?>