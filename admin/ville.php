<?php
include_once('admin_dash_header.php');
require('../pages/connexion.php');

?>
<!-- Main Sidebar Container -->
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
          <li class="nav-item ">
            <a href="admin_dash.php" class="nav-link">
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
                <a href="ville.php" class="nav-link active ">
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
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Donnee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Donnee</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  <section class="content">
   <div class="content-fluid">
    <div class="row">
     <div class="col-md-6">
      <div class="card card-primary">
        <div class="card-header">
          <div class="card-title">
            <h5>Les Villes</h5>
           </div>
           <div class="card-tools">
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#add-ville">
                  Ajouter Ville
                </button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
            </div>
        </div>
        <div class="card-body">
        
   
          <table id="example" class="table" style="width:100%">
              <thead>
                  <tr>
                      <th>Action</th>
                      <th>Villes</th>
                  </tr>
              </thead>
              <tbody>
            
               
              <?php 
            
                $sqls = "SELECT *  FROM villes";
                $elements = $conn->prepare($sqls);
                $elements->execute();
              ?>
              <?php while ($row = $elements->fetch()): ?>
              <tr>
              <td>
                <div class="btn-group" role="group" aria-label="Button group">

                <button class="btn text-truncate modifier_ville" data-toggle="modal" id="<?=($row['id_ville']) ?>" ><i class="fas fa-edit text-warning"></i> </button>
                <button class="btn text-truncate" data-toggle="modal" ><i class="fas fa-trash text-danger"></i></button>
                 </div>
               </td>
              <td class="text-truncate"><?=($row['NOM_VILLE']) ?></td>
        
                  </tr>
              <?php endwhile; ?>
              </tbody>
              <tfoot>
                  <tr>
                      <th>Action</th>
                      <th>Villes</th>
                  </tr>
              </tfoot>
          </table>
        </div>
      </div>
     </div>
     <div class="col-md-6 domaine">
      <div class="card card-success">
        <div class="card-header">
          <div class="card-title text-center">
            <h5>Domaine</h5>
          </div>
          <div class="card-tools">
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#add-domaine" id="add">
                  Ajouter Domaine
                </button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
            </div>
        </div>
      <div class="card-body">
        <table id="exampl" class="table" style="width:100%">
              <thead>
                  <tr>
                      <th>Actions</th>
                      <th>Domaine</th>
                  </tr>
              </thead>
              <tbody>
              <?php 
            
            $domain = "SELECT *  FROM domaine";
            $doma = $conn->prepare($domain);
            $doma->execute();
          ?>
          <?php while ($dom = $doma->fetch()): ?>
          <tr>
          <td>
            <div class="btn-group" role="group" aria-label="Button group">
            <button class="btn text-truncate " data-toggle="modal" id="<?=($dom['id_domaine']) ?>"><i class="fas fa-edit text-warning"></i> </button>
            <button class="btn text-truncate" data-toggle="modal" id="<?=($dom['id_domaine']) ?>"><i class="fas fa-trash text-danger"></i></button>
             </div>
           </td>
          <td class="text-truncate"><?=($dom['NOM_DOMAINE']) ?></td>
    
              </tr>
          <?php endwhile; ?>
              </tbody>
              <tfoot>
                  <tr>
                      <th>Action</th>
                      <th>Domaine</th>
                      
                  </tr>
              </tfoot>
          </table>
        </div>
      </div>
     </div>
    </div>
   </div> 
  </section>
</div>
<div class="modal fade" id="add-domaine">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header ">
              <h4 class="modal-title text-primary">Ajouter</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="POST">
            <div class="modal-body">
           
             <div class="form-group col-12">
              <label for="domaine">Le domaine d'etude</label>
                <input type="text" class="form-control" id="etude" placeholder="nom du domaine" required >
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <input type="button" class="btn btn-danger" data-dismiss="modal" value="Fermer" />
              <button class="btn btn-primary w-20" type="submit"  id="inserer_domaine"> Inserer</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<div class="modal fade" id="add-ville">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ajouter Villes</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="POST" id="insert_form">
            <div class="modal-body">
            
             <div class="form-group col-12">
              <label for="vi">La Ville</label>
              <input type="hidden" class="form-control" id="ville_id">
                <input type="text" class="form-control" id="ville" placeholder="nom de la ville">
              </div>
           
            </div>
            <div class="modal-footer justify-content-between">
            <input type="button" class="btn btn-danger" data-dismiss="modal" value="Fermer" />

            <input type="submit" name="inserer_ville" id="inserer_ville" value="Insert" class="btn btn-success" />  
             
                      
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php 
include_once('admin_dash_footer.php');
?>
<script>
  $(document).ready(function() {
    var table = $('#example').DataTable( {
        "scrollY": "200px",
        "scrollX": true,
        "paging": true
    } );

} );
$(document).ready(function() {
    $('#exampl').DataTable( {
        "scrollY": "200px",
        "scrollX": true,
        "paging": true
    } );

} );

  // $(document).ready(function(){
  //           $("#inserer_ville").click(function(){
  //               var ville = $("#ville").val();
  //               if(ville !=''){
  //               $.ajax({
  //                   url:'pages/ajax/save_ville.php',
  //                   method:'POST',
  //                   data:{
  //                       ville: ville
  //                   },
  //                   cache: false,
  //                  success:function(data){
  //                     if(data){
  //                       toastr.success("Ajout reussi");
  //                     }
  //                     else{
  //                       toastr.error('Echec d\'ajout');
  //                     }
  //                  }
  //               });
  //             }
  //             else{
                
  //                       toastr.error('Champs vide');
                      
  //             }
  //           });
  //       });
        
    $(document).ready(function(){
        $("#inserer_domaine").click(function(){
            var domaine=$("#etude").val();
            $.ajax({
                url:'pages/ajax/save_domaine.php',
                method:'POST',
                data:{
                    domaine: domaine
                },
                success:function(data){
                  toastr.success(data);
                
                }
            });
        });
        });

    // $(document).ready(function(){  
      
    //   $(document).on('click', '.modifier_ville', function(){  
    //        var ville = $(this).attr("id");  
    //        $.ajax({  
    //             url:"fetch.php",  
    //             method:"POST",  
    //             data:{ville:ville},  
    //             dataType:"json",  
    //             success:function(data){  
    //                  $('#ville_modif').val(data.name);  

    //                  $('#modifier_ville').modal('show');  
    //             }  
    //        });  
    //   }); 
    // });

    $(document).ready(function(){  
      $('#add').click(function(){  
           $('#inserer_ville').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var ville_id = $(this).attr("id");  
           $.ajax({  
                url:"../pages/ajax/fetch.php",  
                method:"POST",  
                data:{ville_id:ville_id},  
                dataType:"json",  
                success:function(data){  
                     $('#ville').val(data.NOM_VILLE);  
                     $('#employee_id').val(data.id_ville);  
                     $('#insert').val("Modifier");  
                     $('#add-ville').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#ville').val() == "")  
           {  
                toastr.error("Votre doit etre rempli");  
           }  
           else  
           {  
                $.ajax({  
                     url:"../pages/ajax/save_ville.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                         toastr.success('Success');  
                     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 }); 
</script>
</body>
</html>