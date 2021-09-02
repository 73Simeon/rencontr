<?php

require '..'.DIRECTORY_SEPARATOR.'connexion.php';  
 
 if ($_REQUEST['delete']) {
  
  $pid = $_REQUEST['delete'];
  $query = "DELETE FROM user WHERE id_users=:pid";
  $stmt = $conn->prepare( $query );
  $stmt->execute(array(':pid'=>$pid));
  
  if ($stmt) {
   echo "Product Deleted Successfully ...";
  }
  
 }