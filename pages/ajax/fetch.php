
 <?php  
 //fetch.php  
 require '..'.DIRECTORY_SEPARATOR.'connexion.php';
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM user WHERE id_users = '".$_POST["employee_id"]."'";  
      $result = $conn->prepare($query); 
      $result->execute();
      $row = $result->fetch();  
      echo json_encode($row);  
 } 
 
elseif (isset($_POST["id_valid"]))
{
     $query = "SELECT * FROM user WHERE id_users = '".$_POST["id_valid"]."'";  
     $result = $conn->prepare($query); 
     $result->execute();
     $row = $result->fetch();  
     echo json_encode($row);  
} 



 
 ?>
