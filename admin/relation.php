<?php 
include_once('admin_dash_header.php');

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

<!-- Default box -->
<div class="card card-solid card-secondary">
<section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="profiles.php">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Entrer le mot rechercher">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
  <div class="card-body pb-0">
    <div class="row">
      <?php for($i=0; $i<9; $i++){?>
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
          <div class="card-header text-muted border-bottom-0">
            Site de Rencontre
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>Sama Mathieu</b></h2>
                <p class="text-muted text-sm"><b>Fontion: </b> Web developper  </p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Ville: Ouagadougou</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 226 04 05 02 01</li>
                </ul>
                <p class="text-muted text-sm mt-3"><b>Option: </b> Gratuit  </p>
                <p class="text-muted text-sm mt-3 badge badge-success"><b>Status: </b> Relation  </p>
              </div>
              <div class="col-5 text-center">
                <img src="assets/img/comments-2.jpg" alt="user-avatar" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="#" class="btn btn-sm btn-primary">
                <i class="fas fa-user"></i> Voir Plus
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</section>

</div>
<?php 
include_once('admin_dash_footer.php');
?>
<script>
 function print(){
    window.addEventListener("load", window.print());
 }   
  
</script>
</body>
</html>