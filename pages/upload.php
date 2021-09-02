<?php 
  require 'connexion.php';

if(isset($_POST['valider']))
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

        
        if($inserte)
    {
        echo $conn->lastInsertId();
    }
    else{
        echo 'failled';
    }
    }
    
    
}




?>