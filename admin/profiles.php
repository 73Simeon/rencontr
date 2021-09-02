<?php 
include_once('admin_dash_header.php');
require '../pages/connexion.php';
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
                <a href="profiles.php" class="nav-link active">
                  <i class="far fas fa-user nav-icon"></i>
                  <p>Tous Profiles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="relation.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Relations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
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
  <section class="content mt-3 layout-fixed">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="profiles.php" method="POST">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Entrer le mot rechercher" id="se">
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
    <?php ?>
  <div class="card-body pb-0">
    <div class="row">
  <?php 
      $profile = "SELECT * FROM user";
      $value = $conn->prepare($profile);
      $value->execute();
     
  ?>
  <?php  while ($dat = $value->fetch()): 
      $_SESSION["profile_id"]= $dat['id_users'];
    ?> 
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill" >
          <div class="card-header text-muted border-bottom-0">
            <div class="col-6">
            <p>L'identifiant : <span class="text-danger"> <?=($dat['id_users']) ?></span></p>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-6">
                <h3 class="lead"><strong><?=($dat['NOM_PRENOM']) ?></strong></h3>
                <p class="text-muted text-md">Fonction:  <b><?=($dat['PROFESSION']) ?> </b> </p>
                <p class="text-muted text-sm"><b>Age: </b> <?=($dat['AGE']) ?> </p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Ville: <?=($dat['NOM_VILLE']) ?></li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: <?=($dat['TELEPHONE']) ?></li>
                </ul>
                <p class="text-muted text-sm mt-3"><b>Option: </b> 
                                     <?php 
                                                if($dat["OPTIONS"] === "Gratuit"):
                                                $actif = ' text-danger';   
                                        ?>
                                                <span class="py-2 px-4 <?= $actif ?>"><?=$dat["OPTIONS"];?></span>
                                        <?php

                                            elseif($dat["OPTIONS"] === "Payant"): 
                                                 $actif = ' text-success';
                                        ?>
                                                <span class="py-2 px-4 <?= $actif ?>"><?=$dat["OPTIONS"];?></span>
                                      <?php endif; ?>
              </p>
                
                <p class="text-muted text-sm mt-3"><b>Status: </b> 
                
                        <?php    if (($dat['STATUT']) ==='Non en Relation') :
                                       $act = 'badge badge-warning';                          
                          ?> 
                                 <span class="py-2 px-4 <?= $act ?>"><?=$dat["STATUT"];?></span>
                        </p>
                        <?php    elseif (($dat['STATUT']) ==='En Relation') :
                                       $act = 'badge badge-success';                        
                          ?> 
                                 <span class="py-2 px-5 <?= $act ?>"><?=$dat["STATUT"];?></span>
                        </p>
                        <?php endif; ?>
                <span class="text-danger"> <?=($dat['GENRE']) ?></span>
              </div>
              <div class="col-6 text-center">
             
               <?php 
               echo "<img src='../pages/Image/".$dat['PHOTOS']."' class='img-fluid' alt='".$dat['PHOTOS']."'>";?> 
              <button class="small mt-2 btn btn-success"><i class="fas fa-lg fa-plus"></i></button> 
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <button type="submit" class="btn btn-sm btn-primary view_data" data-toggle="modal" id="<?=($dat['id_users'])?>">
                <i class="fas fa-user"></i> Voir Plus
              </button>
              <!-- <input type="button" name="view" value="view" id="<?php //echo $dat['id_users']; ?>" class="btn btn-info btn-xs view_data" /> -->
            </div>
          </div>
        </div>
      </div>
      <?php endwhile?>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</section>
</div>

<div id="dataModal" class="modal fade">  
      <div class="modal-dialog  modal-xl">  
           <div class="modal-content">  
                <div class="modal-header">  
                <h4 class="modal-title">Details du Profiles</h4> 
                     <button type="button" class="close" data-dismiss="modal">&times;</button>   
                </div>  
                <div class="modal-body" id="employee_detail" class="print">  
                </div>  
                <div id="editor"></div>
                <div class="modal-footer">  
                <!-- this row will not appear when printing -->
                <div class="row no-print">
                     <div class="col-12">
                       <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;" id="cmd" onclick="print()">
                         <i class="fas fa-print"></i>Print
                       </button>
                     </div>
                   </div>  
                </div>  
           </div>  
      </div>  
 </div>  
<?php 
include_once('admin_dash_footer.php');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.2.0/jspdf.umd.min.js"></script>
<script>  
// var doc = new jsPDF();
// var specialElementHandlers = {
//     '#editor': function (element, renderer) {
//         return true;
//     }
// };
//  $('#cmd').click(function () {
//     doc.fromHTML($('.print').html(), 15, 15, {
//         'width': 170,
//             'elementHandlers': specialElementHandlers
//     });
//     doc.save('sample-file.pdf');
// });
function print(){
  window.addEventListener("load", window.print());
}
 $(document).ready(function(){ 
    $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"../pages/actions/select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $("#dataModal").Modal("show");
                     }  
                });  
           }            
      }); 
    });
</script>
</body>
</html>