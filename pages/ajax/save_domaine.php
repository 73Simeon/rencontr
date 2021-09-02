<?php 
require '..'.DIRECTORY_SEPARATOR.'connexion.php';

$domaine = $_POST['domaine'];
	$doma = $conn->prepare( "INSERT INTO domaine (NOM_DOMAINE) VALUES ('$domaine')");
    $domain= $doma->execute();
    if ($domain === true){
        echo "success";
    }
    else 
    {
        echo "failed";
    }
?>