<?php
if(isset($_POST["employee_id"]))  
 {  
    require '..'.DIRECTORY_SEPARATOR.'connexion.php';  
 
     $output = '';  
      
      $query = "SELECT * FROM user, fichier WHERE user.id_users = '".$_POST["employee_id"]."' AND user.id_users= fichier.id_users";  
      $value = $conn->prepare($query);
    $value->execute(); 
      $output .= '  
      <section class="content">';  
      while($dat = $value->fetch())  
      {  
           $output .= '  
           <section class="content">
           <div class="container-fluid">
             <div class="row">
               <div class="col-12">
                 <!-- Main content -->
                 <div class="invoice p-3 mb-3">
                   <!-- title row -->
                   <div class="row">
                     <div class="col-12">
                       <h4>
                         <i class="fas fa-globe"></i> Logo
                         <small class="float-right">Date: 2/10/2014</small>
                       </h4>
                     </div>
                     <!-- /.col -->
                   </div>
                   <!-- info row -->
                   <div class="row invoice-info">
                   <div class="col-12">
                      <p class="text-center h2 text-primary"> '.$dat['NOM_PRENOM'].'</p>
                      <span>Identifiant: '.$dat['id_users'].'</span>
                      </div>
                   </div>
                   <div class="row">
                     <!-- accepted payments column -->
                     <div class="col-lg-6 col-md-12 col-sm-12">
                     <img src="./Image/'.$dat['PHOTOS'].'" class="img-fluid" alt='.$dat['PHOTOS'].'>
                     </div>
                     <!-- /.col -->
                     <div class="col-lg-6 col-md-12 col-sm-12">
                       <p>Age: '.$dat['AGE'].' </p>
                       <p>Genre: '.$dat['GENRE'].' </p>
                       <p>Genre: '.$dat['NOM_VILLE'].' </p>
                       <p>Niveau d\'etude: '.$dat['NIVEAU_ETUDE'].' </p>
                       <p>Domaine d\'etude: '.$dat['NOM_DOMAINE'].' </p>
                       <p>Profession: '.$dat['PROFESSION'].' </p>
                       <p>Situation Matrimoniale: '.$dat['SITUATION_MATRI'].' </p>
                       <p>Religion: '.$dat['RELIGION'].' </p>
                       <p>Profile Rechercher: '.$dat['PROFILE_RECHER'].' </p>
                       <p>Option: '.$dat['OPTIONS'].' </p>
                       <p>Date d\'Inscription: '.$dat['DATE_INSCRI'].' </p>
                       <p>Personne Inscrit: '.$dat['PERSONNE_INSCRI'].' </p>
                       <p>Telephone: '.$dat['TELEPHONE'].' </p>
                       <p>Email: '.$dat['EMAIL'].' </p>
                       <p>Status: '.$dat['STATUT'].' </p>
                     </div>
                     <!-- /.col -->
                   </div>
                   <!-- /.row -->
                 </div>
                 <!-- /.invoice -->
               </div><!-- /.col -->
             </div><!-- /.row -->
           </div><!-- /.container-fluid -->
         </section>
           ';  
      }  
      $output .= ' 
         </section>
      ';  

      echo $output;  
 }  
 ?>