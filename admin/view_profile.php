<?php 
include_once '../pages/connexion.php';
include_once 'admin_dash_header.php';

?>
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin_dash.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="Rencontre Admin" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrateur</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="admin_dash.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de Board
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Gestion
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_user.php" class="nav-link">
                  <i class="far fas fa-plus nav-icon"></i>
                  <p>Ajouter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="all_users.php" class="nav-link ">
                  <i class="far fas fa-table nav-icon"></i>
                  <p>Listes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ville.php" class="nav-link ">
                  <i class="far fas fa-home nav-icon"></i>
                  <p>Ville</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item  menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pofiles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="profiles.php" class="nav-link">
                  <i class="far fas fa-user nav-icon"></i>
                  <p>Tous Profiles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="relation.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Relations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="non_relation.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Non Relations</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profiles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Profiles</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->

    <section class="content">  
        <?php 
        $query = "SELECT * FROM user, fichier WHERE user.id_users = '".$_SESSION["profile_id"]."' and fichier.id_users= user.id_users";  
        $value = $conn->prepare($query);
        $value->execute();
        ?>
     <?php while($dat = $value->fetch()): ?>  
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
                      <p class="text-center h2 text-primary"> <?php $dat['NOM_PRENOM'] ?></p>
                      <span>Identifiant: <?php $dat['id_users'] ?></span>
                      </div>
                   </div>
                   <div class="row">
                       <!-- accepted payments column -->
                    

                     <?php
                
                      echo "<img src='../pages/Image/".$dat['PHOTOS']."' class='img-fluid' alt='".$dat['PHOTOS']."'>";
                     
                      ?> 
                     </div>
                     <div class="col-lg-6 col-md-12 col-sm-12">
                       <p>Age: <?php $dat['AGE'] ?> </p>
                       <p>Genre:<?php $dat['GENRE'] ?> </p>
                       <p>Ville: <?php $dat['NOM_VILLE'] ?> </p>
                       <p>Niveau d\'etude: <?php $dat['NIVEAU_ETUDE'] ?> </p>
                       <p>Domaine d\'etude:<?php $dat['NOM_DOMAINE'] ?></p>
                       <p>Profession: <?php $dat['PROFESSION'] ?> </p>
                       <p>Situation Matrimoniale: <?php $dat['SITUATION_MATRI'] ?> </p>
                       <p>Religion: <?php $dat['RELIGION'] ?></p>
                       <p>Profile Rechercher: <?php $dat['PROFILE_RECHER'] ?> </p>
                       <p>Option: <?php $dat['OPTIONS'] ?> </p>
                       <p>Date d\'Inscription: <?php $dat['DATE_INSCRI'] ?></p>
                       <p>Personne Inscrit: <?php $dat['PERSONNE_INSCRI'] ?> </p>
                       <p>Telephone: <?php $dat['TELEPHONE'] ?></p>
                       <p>Email: <?php $dat['EMAIL'] ?> </p>
                       <p>Status: <?php $dat['STATUT'] ?> </p>
                     </div>
                     <div id="employee_detail">
                         
                     </div>
                     <!-- /.col -->
                   </div>
                   <!-- /.row -->
                 </div>
                 <!-- /.invoice -->
               </div><!-- /.col -->
             </div><!-- /.row -->
           </div><!-- /.container-fluid -->
         <?php endwhile?>
        </section>
<?php include_once 'admin_dash_footer.php'; ?>

</body>
</html>
