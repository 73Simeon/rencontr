
<?php

require '..'.DIRECTORY_SEPARATOR.'connexion.php';  

	if(!empty($_POST['employee_id'])){

		$employee_id = $_POST['employee_id'];
		$nom = $_POST['nom'];
		$ville = $_POST['ville'];
		$age = $_POST['age'];
    $profession= $_POST['profession'];
		$domaine = $_POST['domaine'];
		$religion = $_POST['religion'];
		$date_inscription = $_POST['date_inscription'];
    $telephone = $_POST['telephone'];
		$status = $_POST['status'];
		$option = $_POST['option'];
		$email = $_POST['email'];
    $matrimoniale = $_POST['matrimoniale'];
		$person_inscrit = $_POST['person_inscrit'];
		$profile = $_POST['profile'];
    $sex = $_POST['sex'];
    $niveau = $_POST['niveau'];
		$upd= "UPDATE user SET NOM_VILLE = '$ville', NOM_DOMAINE = '$domaine', NOM_PRENOM = '$nom', AGE = '$age', PROFESSION = '$profession', GENRE = '$sex',
        NIVEAU_ETUDE = '$niveau', PERSONNE_INSCRI = '$person_inscrit', OPTIONS = '$option', EMAIL = '$email', TELEPHONE = '$telephone', RELIGION = '$religion', 
         SITUATION_MATRI = '$matrimoniale',DATE_INSCRI='$date_inscription',
        PROFILE_RECHER = '$profile', STATUT = '$status'
        WHERE id_users = '$employee_id'";

        $updat = $conn->prepare($upd);
        $updat->execute();
        $updated= $updat->execute();

        if ( $updated===true) {
          echo "Success";
        }
        else {
        echo 'faildes';
        }
      }
    
?>