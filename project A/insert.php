<?php
    include "connect.php";
    $uploadDir = 'images/'; 

    $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 

    if(isset($_POST['nameCategory']) || isset($_POST['imageCategory'])){ 

        $nameCategory = $_POST["nameCategory"];

        $uploadedFile = ''; 
        if(!empty($_FILES["imageCategory"]["name"])){ 
            // File path config 
            $fileName = ($_FILES["imageCategory"]["name"]); 
            $targetFilePath = $uploadDir . $fileName; 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 

                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["imageCategory"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                    }
                }
            }

        $insertToCategory = $connectDb->prepare("INSERT INTO category (NomCategory,CategoryImage) VALUES ('$nameCategory','$uploadedFile')");
        $insertToCategory->execute();
                    }
    ?>

