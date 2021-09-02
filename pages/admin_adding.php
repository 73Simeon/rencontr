<?php

if(isset($_POST['valider']))
{
require 'connexion.php';
    extract($_POST);
    extract($_FILES);

    $storeFolder = 'Image/';   //2
    
    if (!empty($_FILES)) 
    {
    
        $tempFile = $_FILES['file']['tmp_name'];          //3             
        $targetPath = $storeFolder;  //4
        $link = $_FILES['file']['name'];
        $targetFile =  $targetPath. $link;  //5
        $files_name = move_uploaded_file($tempFile,$targetFile); //6

        $sql="INSERT INTO user (NOM_VILLE ,NOM_DOMAINE, NOM_PRENOM, AGE, PROFESSION , GENRE, NIVEAU_ETUDE, SITUATION_MATRI,RELIGION,TELEPHONE,EMAIL,PROFILE_RECHER,OPTIONS,DATE_INSCRI,PERSONNE_INSCRI, PHOTOS)
        VALUES ('$ville','$domaine','$nom' ,'$age ans', '$profession' ,'$sex', '$niveau' ,'$situation' ,'$religion','$telephone','$email','$type_rechercher','$option', '$date_inscription','Administrateur','$link')";
        $insert = $conn->prepare($sql)->execute();
        
        if($insert)
    {
         $_SESSION['ids']=$conn->lastInsertId();
         $_SESSION['noms']=$nom;

    }

    }
    
    
}


?>