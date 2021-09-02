<?php
	require '..'.DIRECTORY_SEPARATOR.'connexion.php';
    

     if (!empty($_POST['id_valid'])) 
    {
      $id_valid = $_POST['id_valid'];
      $statut = $_POST['statut'];
      $updstatus= "UPDATE user SET  STATUT = '$statut'
      WHERE id_users = '$id_valid'";

    $updatat = $conn->prepare($updstatus);
    $updatat->execute();
    $updatedstatut= $updatat->execute();

    if ( $updatedstatut===true) {
      echo "Success";
    }
    else {
    echo 'faildes';
    }

  
} 
	
?>
 