<?php 
include_once 'admin_dash_header.php';
include_once '../pages/connexion.php';

if (!$_SESSION['add_user']) {
   header("Location: add_user.php");
}

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin_dash.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="Rencontre Admin" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
          <li class="nav-item">
            <a href="admin_dash.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de Board
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Gestion
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_user.php" class="nav-link active">
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
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pofiles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="profiles.php" class="nav-link">
                  <i class="far fas fa-plus nav-icon"></i>
                  <p>Tous Profiles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Relations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Non Relation</p>
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
    <!-- Content Header (Page header) -->
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ajouter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Ajouter</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <!-- general form elements -->
                <div class="card card-primary ">
                  <div class="card-header ">
                    <div class="row">
                      <div class="col-md-6">
                    <h3 class="card-title ">Ajouer un membre</h3>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                   <div class="row">
                    <div class="col-lg-6  col-md-6 col-sm-12">
                    <span class="h4">Identifiant: </span>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                    <p class="text-center text-danger" id="id_user"><?= $_SESSION['noms']?> votre identifiant est : <?= $_SESSION['ids']?></p> 
                    </div>
                    <div class="col-12">
                    <p class="text-success text-center h5">Votre inscription a bien reussi veillez copier votre identifiant pour votre requete!</p>
                    </div>
                    </div>
                  <form action="" method="POST" enctype="multipart/form-data" id="add_fin">
                    <div class="row">
                <div class="form-group col-md-12">
                <input type="text" name="id_users" id="id_users" class="form-control" value=<?= $_SESSION['ids']?>>
              </div>
            </div>
                
              <div class="row">
              <div class="form-group col-md-12">
              <div class="form-group rounded text-center py-5 dropzone" id="test_dropzone">
                  <div class="dz-message">
                      <i class="fa fa-download fa-2x text-muted" aria-hidden="true"></i>
                      <h4 class="text-muted">Clicker ici pour inserser une image.</h4>
                      <div id="file_area" ></div>
                  </div>
              </div>
            </div>
              </div>
                       <div class="row">
                      <div class="form-group col-md-12">
                      <input type="submit" class="btn btn-primary form-control" id="valider" name="valider" value="Valider" >
                      </div>
                      </div>
</form>
                    </div>
                    <div class="card-footer text-center">
                      
                    </div>
                  
                </div>
                <!-- /.card -->
              </div>
            </div>
        </div>
    </section>
<?php 
include_once 'admin_dash_footer.php';
?>

<script>
   Dropzone.autoDiscover = false;
    $(document).ready(function () {

        var dropzone = new Dropzone("#test_dropzone", {
                url: '../pages/upload.php',
                clickable: true,
                method: 'POST',
                autoProcessQueue: false,
                paraName: 'file',
                maxFilesize: 7, //MB
                maxFiles: 3,
                acceptedFiles:'.png',
                addRemoveLinks: true,
                uploadMultiple: false,
                thumbnailWidth: 400,
                thumbnailHeight: 400,
                init: function () {
                    dzClosure = this;
                    $('#valider').on("click", function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        var erreur = [];
                        //----------------------------------------------------------------------------------------

                        if (dzClosure.getQueuedFiles().length < 1) {
                            $(".dropzone").addClass("border border-danger");
                            erreur['file'] = 'Ce champs doit pas etre vide';
                            $("#file_area").html("<div class='text-danger my-2'>"+ erreur['file']+"</div>");
                        }
                        else
                        {
                            $(".dropzone").removeClass("border border-danger");  
                            $("#file_area").html("");                          
                        }

                        if (Object.keys(erreur).length == 0) {
                            dzClosure.processQueue();
                        }
                    });

                    dzClosure.on("sending", function (data, xhr, formData) {
                        $(":input[name]", $("#add_fin")).each(function () {
                            formData.append(this.name, $(':input[name=' + this.name + ']', $("#add_fin")).val());
                        });
                    })

                    dzClosure.on("complete" , function (file) {
                        dzClosure.removeFile(file);
                    })
                },

                success: function (file, response) {

                    if (response == 'success') {
                        toastr.error("Echec d'inscription");
                        $("#test").html(response);
                    }
                    else
                    {
                        toastr.success("Votre insciption a reussi!");
                        $("#add_fin")[0].reset();
                        $("#id_user").val('');
                       

                        
                    }
                                        
                },
                error: function (file, response) {
                    toastr.error("Erreur");
                }
        });
    });

</script>