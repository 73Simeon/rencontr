<?php  
 //fetch.php  
 require '..'.DIRECTORY_SEPARATOR.'connexion.php';
 
 if(isset($_POST["user_id"]))  
 {  
    
    $data = "SELECT * FROM villes  where  id_ville='".$_POST["user_id"]."'";
    $value = $conn->prepare($data);
    $value->execute();  
    $row = $value->fetch();
    
      echo json_encode($row);  
 }  
 ?>