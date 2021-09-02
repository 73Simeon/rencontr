<?php

require '..'.DIRECTORY_SEPARATOR.'connexion.php';

 

   
//        extract($_POST);
       
//     $nom = $_POST['nom'];
//     $telephone = $_POST['telephone'];
//     $age = $_POST['age'];
//     $sex = $_POST['sex'];
//     $profession = $_POST['profession'];
//     $domaine = $_POST['domaine'];
//     $niveau = $_POST['niveau'];
//     $email = $_POST['email'];
//     $ville = $_POST['ville'];
//     $religion= $_POST['religion'];
//     $option= $_POST['option'];
//     $profile = $_POST['profile'];
//     $situation = $_POST['matrimoniale'];

//     $sql="INSERT INTO user (NOM_VILLE ,NOM_DOMAINE, NOM_PRENOM, AGE, PROFESSION , GENRE, NIVEAU_ETUDE, SITUATION_MATRI,RELIGION,TELEPHONE,EMAIL,PROFILE_RECHER,OPTIONS,DATE_INSCRI,PERSONNE_INSCRI)
//     VALUES ('$ville','$domaine','$nom' ,'$age ans', '$profession' ,'$sex', '$niveau' ,'$situation' ,'$religion','$telephone','$email','$profile','$option', NOW(),'Utilsateur')";
//     $insert = $conn->prepare($sql)->execute();
    
//     if($insert)
// {
//     echo $nom.' Votre Code est: '.$conn->lastInsertId();
//     $_SESSION['id']=$conn->lastInsertId();
//     $_SESSION['nom']= $nom;

// }

if(isset($_POST['inserer']))
{
   
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
        
        $sqls = "INSERT INTO fichier (id_users, PHOTOS ) VALUES ('$id_users','$link')"; 
        $inserte = $conn->prepare($sqls)->execute();

        $sql="INSERT INTO user (NOM_VILLE ,NOM_DOMAINE, NOM_PRENOM, AGE, PROFESSION , GENRE, NIVEAU_ETUDE, SITUATION_MATRI,RELIGION,TELEPHONE,EMAIL,PROFILE_RECHER,OPTIONS,DATE_INSCRI,PERSONNE_INSCRI, PHOTOS)
        VALUES ('$ville','$domaine','$nom' ,'$age ans', '$profession' ,'$sex', '$niveau' ,'$matrimoniale' ,'$religion','$telephone','$email','$profile','$option', NOW(),'Utilsateur','$link')";
        $insert = $conn->prepare($sql)->execute();
        
        
        if($inserte)
    {
        $_SESSION['id']=$conn->lastInsertId();
         $_SESSION['nom']= $nom;
    }
    else{
        echo 'failled';
    }
    }
    
    
}
   

?>